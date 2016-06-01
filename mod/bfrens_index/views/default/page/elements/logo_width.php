<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */
 
 $site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_url2=$site_url."mod/bfrens_index/graphics/logo-width.png";



		echo elgg_view('output/url', array(
			'href' => $site_url,
			'text' => "<img src='{$site_url2}' border='0' height='130'>",
		)); 