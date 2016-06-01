<?php
/**
 * Assembles and outputs the forgotten password page.
 *
 * @package Elgg.Core
 * @subpackage Registration
 */

if (elgg_is_logged_in()) {
	forward();
}




$register_url = elgg_get_site_url() . 'action/user/requestnewpassword';
if (elgg_get_config('https_login')) {
	$register_url = str_replace("http:", "https:", $register_url);
}

$content .= elgg_view_form('user/requestnewpassword', array(
	'class' => 'elgg-form-account',
	'action' => $register_url,
));

if (elgg_get_config('walled_garden')) {
	elgg_load_css('elgg.walled_garden');
	$body = elgg_view_layout('walled_garden', array('content' => $content));
	echo elgg_view_page($title, $body, 'walled_garden');
} else {
	
	echo elgg_view_page($title, $content, "shells/blank");
}