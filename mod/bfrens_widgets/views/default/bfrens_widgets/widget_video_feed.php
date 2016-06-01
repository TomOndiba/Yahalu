<?php



$video = $vars['entity'];

$content = elgg_view_entity($video, true);

$video_url = $video->video_url;
$video_id = $video->youtube_id;

$body = "<div class=\"bf-widgets-video\">";
$body .= videoembed_create_embed_object($video_url, $video->getGUID(),260); 
$body .="</div>";



$owner = $vars['entity']->getOwnerEntity();
$friendlytime = friendly_time($vars['entity']->time_created);

$info = "<p class=\"owner_timestamp\"><a href=\"{$owner->getURL()}\">{$owner->name}</a> {$friendlytime}</p>";


$body = $info . $body;

$icon = elgg_view("profile/icon", array(
					'entity' => $owner,
					'size' => 'small',
						));

echo elgg_view('page/components/image_block', array('body' => $body, 'image' => $icon));



		
		
		
?>