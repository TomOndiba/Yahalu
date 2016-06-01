<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings


$count = 5;

$tittel=elgg_echo("bf_widgets:jo");



$content .= elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'joks',
	'full_view' => FALSE,
	'pagination' => FALSE,
	'limit' => get_input('limit', $count),
));


$vars['bfrens_wid_title']=$tittel; 
$filename=dirname(__FILE__)."/bfrens_content.php";
if (file_exists($filename)) {
$vars['bfrens_wid_link']=basename(__DIR__); 
}
$vars['bfrens_wid_content']=$content;

$body = elgg_view_layout("bfrens_widgets", $vars);



echo $body;