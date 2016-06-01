<?php

$title = elgg_echo('bf_index:leagal');

$content= elgg_echo('Sorry, This page is under construction. Please check back later!');

$params = array(
	'content' => $content,
	'sidebar' => elgg_view('index_sidebar'),
	'title' => $title ,
);

$body = elgg_view_layout('content-left', $params);

echo elgg_view_page($title, $body, "shells/site_page");