<?php

elgg_load_js('lightbox');
elgg_load_css('lightbox');

$photo = $vars['entity'];

$img = elgg_view_entity_icon($photo , 'large', array(
	'href' => $photo ->getIconURL('large'),
	'img_class' => 'tidypics-photo',
	'link_class' => 'tidypics-lightbox',
));


$body = elgg_view('output/url', array(
	'text' => $img,
	'href' => $photo ->getIconURL('master'),
	'encode_text' => false,
	'is_trusted' => true,
));

$body = "<div class=\"bf-photo-new-widget\">$body</div>";

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