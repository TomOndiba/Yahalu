<?php

$title = elgg_echo('chat_pfc');

		
$content = elgg_view('page/bfrens_chat');



$params = array(
	'content' => $content,
	'title' => $title,
	'filter_override' => elgg_view('chat_pfc/nav', array('selected' => $vars['page'])),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);