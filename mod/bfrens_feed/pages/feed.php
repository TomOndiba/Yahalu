<?php
/**
 * Main activity stream list page
 */

$options = array();

$page_type = preg_replace('[\W]', '', get_input('page_type', 'all'));
$type = preg_replace('[\W]', '', get_input('type', 'all'));
$subtype = preg_replace('[\W]', '', get_input('subtype', ''));
if ($subtype) {
	$selector = "type=$type&subtype=$subtype";
} else {
	$selector = "type=$type";
}

if ($type != 'all') {
	$options['type'] = $type;
	if ($subtype) {
		$options['subtype'] = $subtype;
	}
}

switch ($page_type) {
	case 'mine':
		$title = elgg_echo('river:mine');
		$page_filter = 'mine';
		$options['subject_guid'] = elgg_get_logged_in_user_guid();
		break;
	case 'friends':
		$title = elgg_echo('river:friends');
		$page_filter = 'friends';
		$options['relationship_guid'] = elgg_get_logged_in_user_guid();
		$options['relationship'] = 'friend';
		break;
	default:
		$title = elgg_echo('river:all');
		$page_filter = 'all';
		break;
}

	$options['data-options'] = htmlentities(json_encode($options), ENT_QUOTES, 'UTF-8');
	$options['limit'] = 30;
	$options['pagination'] = true;
	$options['base_url'] = 'activity';
	$options['list_id'] = 'elgg-river-main';

	$activity = elgg_list_river($options);

	$content = elgg_view('core/river/filter', array('selector' => $selector));


	$params = array(
		'content' => $content . $activity,
		'filter_context' => $page_filter,
		'class' => 'elgg-river-layout profile elgg-col-1of2 elgg-inner clearfix',
	);

$body = elgg_view_layout('one_column', $params);

$params = array(
	'content' =>  $body,
	'num_columns' =>  2,
);

$body = elgg_view_layout('widgets', $params );

	$user = elgg_get_logged_in_user_entity();
	
	
	$name = strstr($user->name, ' ', true);
	if (empty($name))$name=$user->name.elgg_echo('bf:owners:feed');
	else $name .=elgg_echo('bf:owners:feed');
	
	$name="<div align=\"center\" class=\"bf-index-topic\"> $name </div>";

$body = elgg_view_layout('one_column', array('content' =>  $body , 'title' => $name ));

echo elgg_view_page($title, $body);
