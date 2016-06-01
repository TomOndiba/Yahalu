<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings

$count = sanitise_int($vars["entity"]->bf_widget_the_wire, false);
if(empty($count)){
        $count = 12;
}

elgg_load_js('lightbox');
elgg_load_css('lightbox');

if (elgg_is_logged_in()) {

echo elgg_view('output/url', array(

    'href' => "ajax/view/photos/selectalbum/?owner_guid=" . $logged_in_guid,

    'text' => elgg_echo("photos:addphotos"),
    
    'title' => elgg_echo('photos:addphotos'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox",
        
));
echo elgg_view('output/url', array(

    'href' => "videos/add_lightbox/" . $logged_in_guid,

    'text' => elgg_echo("videos:add"),
    
    'title' => elgg_echo('videos:add'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox",
        
));
echo elgg_view('output/url', array(

    'href' => "/joks/add/" . $logged_in_guid,

    'text' => elgg_echo("joks:add"),
    
    'title' => elgg_echo('joks:add'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox",
        
));
}

else{



		echo elgg_echo("bf_widgets:no_no_acsess");

		echo elgg_view('output/url', array(
			'href' => 'rgi/login',
			'class' => 'elgg-button elgg-lightbox',
			'text' => elgg_echo('login'),
			'title' => elgg_echo('login'),
		)); 
		
		echo elgg_view('output/url', array(
			'href' => 'rgi/register',
			'class' => 'elgg-button elgg-lightbox',
			'text' => elgg_echo('register'),
			'title' => elgg_echo('register'),
		));
		
}