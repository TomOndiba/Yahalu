<?php
/**
 * View a file
 *
 * @package ElggFile
 */

$file = get_entity(get_input('guid'));
if (!$file) {
	register_error(elgg_echo('noaccess'));
	$_SESSION['last_forward_from'] = current_page_url();
	forward('');
}

$owner = elgg_get_page_owner_entity();

elgg_push_breadcrumb(elgg_echo('file'), 'file/all');

$crumbs_title = $owner->name;


$title = $file->title;

elgg_push_breadcrumb($title);

$content = elgg_view_entity($file, array('full_view' => true));
$content .= elgg_view_comments($file);



$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);
