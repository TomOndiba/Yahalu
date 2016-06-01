<?php
/**
 * Assembles and outputs a login page.
 *
 * This page serves as a fallback for non-JS users who click on the login
 * drop down link.
 *
 * If the user is logged in, this page will forward to the front page.
 *
 * @package Elgg.Core
 * @subpackage Accounts
 */

if (elgg_is_logged_in()) {
	forward('');
}

$register_url = elgg_get_site_url() . 'action/login';
if (elgg_get_config('https_login')) {
	$register_url = str_replace("http:", "https:", $register_url);
}

$content .= elgg_view_form('login_new', array(
	'class' => 'elgg-form-account',
	'action' => $register_url,
));


$title = elgg_echo('login');



	
	echo elgg_view_page($title, $content, "shells/blank");