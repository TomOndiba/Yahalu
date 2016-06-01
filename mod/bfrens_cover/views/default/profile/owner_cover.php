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

//$user['sub_type']='defaultcover';

$icon = elgg_view_entity_icon($user, 'cover', array(
	'use_hover' => false,
	'use_link' => false,
));


$profile = elgg_view_entity_icon($user, 'medium2', array(
	'use_hover' => false,
	'use_link' => false,
));


$name = elgg_view('core/profile_bfrens_name', array(), $user); 

echo <<<HTML

<div id="profile-owner-cover">
	$icon
</div>
<div id="profile-owner-cover-profile">
	$profile 
</div>
<div id="profile-owner-cover-asasa">
	$name 
</div>

HTML;
