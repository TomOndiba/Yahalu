<?php


 
function bfrens_tweets_init() {

elgg_extend_view('css/elgg', 'bfrens_tweets_css');

	$action_base = elgg_get_plugins_path() . 'bfrens_tweets/actions';
	elgg_register_action("tweets/add", "$action_base/add.php");
	
	$thewire_js = elgg_get_simplecache_url('js', 'tweets');
	elgg_register_simplecache_view('js/tweets');
	elgg_register_js('elgg.tweets', $thewire_js, 'footer');
}


function tweets_save_post($text, $userid, $access_id, $parent_guid = 0, $method = "site") {
	$post = new ElggObject();

	$post->subtype = "tweets";
	$post->owner_guid = $userid;
	$post->access_id = $access_id;

	// only 200 characters allowed
	$text = elgg_substr($text, 0, 200);

	// no html tags allowed so we escape
	$post->description = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8');

	$post->method = $method; //method: site, email, api, ...

	$tags = thewire_get_hashtags($text);
	if ($tags) {
		$post->tags = $tags;
	}

	// must do this before saving so notifications pick up that this is a reply
	if ($parent_guid) {
		$post->reply = true;
	}

	$guid = $post->save();

	// set thread guid
	if ($parent_guid) {
		$post->addRelationship($parent_guid, 'parent');
		
		// name conversation threads by guid of first post (works even if first post deleted)
		$parent_post = get_entity($parent_guid);
		$post->wire_thread = $parent_post->wire_thread;
	} else {
		// first post in this thread
		$post->wire_thread = $guid;
	}

	if ($guid) {
		add_to_river('river/object/thewire/create', 'create', $post->owner_guid, $post->guid);

		// let other plugins know we are setting a user status
		$params = array(
			'entity' => $post,
			'user' => $post->getOwnerEntity(),
			'message' => $post->description,
			'url' => $post->getURL(),
			'origin' => 'thewire',
		);
		elgg_trigger_plugin_hook('status', 'user', $params);
	}
	
	return $guid;
}

 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_tweets_init');

?>