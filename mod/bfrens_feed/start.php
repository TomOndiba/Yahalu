<?php


 
function bfrens_feed_init() {

elgg_register_plugin_hook_handler('get_list', 'default_widgets', 'feed_default_widgets_hook');

elgg_register_page_handler('feed', 'feed_page_handler');
}
 
function feed_page_handler($page) {


$base_lists = elgg_get_plugins_path() . 'bfrens_feed/pages';

require "$base_lists/feed.php";
return true;

}

function feed_default_widgets_hook($hook, $type, $return) {
	$return[] = array(
		'name' => elgg_echo('feed'),
		'widget_context' => 'feed',
		'widget_columns' => 2,

		'event' => ELGG_ENTITIES_ANY_VALUE,
		'entity_type' => ELGG_ENTITIES_ANY_VALUE,
		'entity_subtype' => ELGG_ENTITIES_ANY_VALUE,
	);

	return $return;
}
 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_feed_init');

?>