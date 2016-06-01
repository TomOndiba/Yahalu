<?php
/**
 * Add video page
 *	Author : Sarath C | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Mail : webgalli@gmail.com
 *	Web	: http://webgalli.com | http://plugingalaxy.com
 *	Skype : 'team.webgalli' or 'drsanupmoideen'
 *	@package Elgg-videos
 * 	Plugin info : Upload/ Embed videos. Save uploaded videos in youtube and save your bandwidth and server space
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */

gatekeeper();

$page_owner = elgg_get_page_owner_entity();
if ($page_owner === false || is_null($page_owner)) {
  $page_owner = elgg_get_logged_in_user_entity();
  elgg_set_page_owner_guid($page_owner->getGUID());
}
$prefix = elgg_get_config('dbprefix');
$friends = elgg_get_entities_from_relationship(array('relationship' => 'friend',
                                                     'relationship_guid' => elgg_get_logged_in_user_guid(),
                                                     'type' => 'user',
                                                     'limit' => false,
                                                     'joins' => array("JOIN " . $prefix . "users_entity u ON e.guid=u.guid"),
                                                     'order_by' => "u.name asc",
                                                     ));

// set the title
$title = elgg_echo('gifts:sendgifts');

// start building the main column of the page
$area2 = elgg_view_title($title);

// Add the form to this section
$area2 .= elgg_view("gifts/form",array('friends' => $friends));



echo elgg_view_page("", $area2, "shells/blank");