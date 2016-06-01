<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings

$owner = get_loggedin_userid();



$count = sanitise_int($vars["entity"]->bf_widget_the_wire, false);
if(empty($count)){
        $count = 12;
}


if (elgg_is_logged_in()) {
	$form_vars = array('class' => 'thewire-form');
	$content .= elgg_view_form('tweets/add', $form_vars);
	$content .= elgg_view('input/urlshortener');
}

$content .= elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'tweets',
	'owner_guid' => $owner,
	'pagination' => false,
	'limit' => get_input('limit', $count),
));




$tittel=elgg_echo("bf_widgets:tw");
$tittel= "<a>$tittel</a>"; 

$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-02.jpg",
	'class' => '',
	'style' => "width:437px; margin: -15px -15px 5px -15px;",
));
$vars['bfrens_wid_discription']=$dis;


$vars['bfrens_wid_title']=$tittel; 

$filename=dirname(__FILE__)."/bfrens_content.php";
if (file_exists($filename)) {
$vars['bfrens_wid_link']=basename(__DIR__); 
}
$vars['bfrens_wid_content']=$content;

$body = elgg_view_layout("bfrens_widgets", $vars);



echo $body;