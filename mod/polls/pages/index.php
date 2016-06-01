<?php

	/**
	 * Elgg Poll plugin
	 * @package Elggpoll
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @Original author John Mellberg
	 * website http://www.syslogicinc.com
	 * @Modified By Team Webgalli to work with ElggV1.5
	 * www.webgalli.com or www.m4medicine.com
	 */

		
	// Get the current page's owner
		$page_owner = page_owner_entity();
		if ($page_owner === false || is_null($page_owner)) {
			$page_owner = $_SESSION['user'];
			set_page_owner($_SESSION['guid']);
		}

	//set poll title
		if($page_owner == $_SESSION['user']){
			$title = elgg_echo('polls:your');
		}else{
			$title = sprintf(elgg_echo('polls:not_me'),$page_owner->name);
		}
		
	// TODO: fix this to properly paginate polls instead of using a fixed 50 for limit
		
	// Get poll posts
		$polls = $page_owner->getObjects('poll',50,0);
		
		foreach($polls as $poll)
		{
			$area2 .= elgg_view("polls/listing", array('entity' => $poll));
		}

//$title = sprintf(elgg_echo('polls:user'));
$body = elgg_view_layout('content', array(
	'filter_context' => 'mine',
	'content' => $area2,
	'title' => $title,
));

echo elgg_view_page($title, $body);
		
// $params = array(
// 		'content' => $area2,
//                 'sidebar' => '',
// 		
// 	);
// 	  
// $body = elgg_view_layout('two_sidebar', $params);
// 	// Display them in the page
//       //  $body = elgg_view_layout("two_sidebar", $params);
// 		
// 	// Display page
// 		page_draw(sprintf(elgg_echo('polls:user'),$page_owner->name),$body);
		
?>