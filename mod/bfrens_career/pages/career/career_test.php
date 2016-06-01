<?php

gatekeeper();

$user = elgg_get_page_owner_entity();
if (!$user) {
	register_error(elgg_echo("profile:notfound"));
	forward();
}

// check if logged in user can edit this profile
if (!$user->canEdit()) {
	register_error(elgg_echo("noaccess"));
	forward();
}
elgg_set_context('career_test');

$title = elgg_echo('career:test');

$content = elgg_view_form('career/career_test', array(), array('entity' => $user));

$params = array(
	'content' => $content,
	'title' => $title,
);
$body = elgg_view_layout('one_column', $params);

echo elgg_view_page($title, $body);