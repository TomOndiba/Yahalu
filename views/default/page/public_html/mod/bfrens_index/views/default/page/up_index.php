<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */
 
 if (elgg_is_logged_in()) {
	return true;
}

$login_url = elgg_get_site_url();
if (elgg_get_config('https_login')) {
	$login_url = str_replace("http:", "https:", elgg_get_site_url());
}

elgg_load_js('lightbox');
elgg_load_css('lightbox');


 $body = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE));

		echo elgg_view('output/url', array(
			'href' => 'login#login-dropdown-box',
			'rel' => 'popup',
			'class' => 'elgg-button',
			'text' => elgg_echo('login'),
		)); 
		echo elgg_view_module('dropdown', '', $body, array('id' => 'login-dropdown-box')); 
		
 $body2 = elgg_view_form('rgi', array('action' => "{$login_url}action/register"), array('returntoreferer' => TRUE));

		echo elgg_view('output/url', array(
			'href' => 'rgi#login-dropdown-box2',
			'rel' => 'popup',
			'class' => 'elgg-button elgg-lightbox',
			'text' => elgg_echo('register'),
		)); 
		 		
	?>