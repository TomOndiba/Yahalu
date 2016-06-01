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

echo elgg_view('page/components/bf_widgets_image', array('body' => $body));

		
		
		
?>