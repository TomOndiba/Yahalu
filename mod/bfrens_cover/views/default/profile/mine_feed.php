<?php
/**
 * Profile owner block
 */

$user = elgg_get_page_owner_entity();

if (!$user) {
	// no user so we quit view
	echo elgg_echo('viewfailure', array(__FILE__));
	return TRUE;
}
$options = array();

$title = elgg_echo('river:mine');

$page_filter = 'mine';
$options['subject_guid'] = elgg_get_page_owner_guid();
$options['list_class'] = "elgg-list-river elgg-river elgg-river-bfrens";



$activity = elgg_list_river($options);
if (!$activity) {
	$activity = elgg_echo('river:none');
}
$title = elgg_view_title($title, $vars = array());

$activity = $title . $activity;

echo $activity;