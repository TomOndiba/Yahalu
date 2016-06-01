<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings


$count = 8;

$tittel=elgg_echo("bf_widgets:feed:jo");
$tittel= "<a href=\"\">$tittel</a>"; 

$owner = get_loggedin_userid();

$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'joks',
	'full_view' => FALSE,
	'pagination' => FALSE,
	'limit' => get_input('limit', $count),
));
	if(empty($content))
	{
$content = elgg_view('output/img', array(
	'src' => "http://image.shutterstock.com/display_pic_with_logo/350266/350266,1263570771,1/stock-photo-indian-teenager-girl-expressing-great-joy-44546950.jpg",
	'class' => '',
	'style' => "width:405px;",
));


	} 

$user=get_loggedin_user();

$addbtn = elgg_view('output/url', array(

    'href' => "/joks/add/" . $user,

    'text' => elgg_echo("joks:add"),
    
    'title' => elgg_echo('joks:add'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-03.jpg",
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