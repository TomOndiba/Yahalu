<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings


$count = 1;



$owner = get_loggedin_userid();

$options = array(
	'type' => 'object',
	'subtype' => 'joks',
	'full_view' => FALSE,
	'limit' => 4,
	'pagination' => false,

);

	
$content = elgg_list_entities($options);	
	


$user=get_loggedin_user();

$addbtn = elgg_view('output/url', array(

    'href' => "/joks/add/" . $user,

    'text' => elgg_echo("joks:add"),
    
    'title' => elgg_echo('joks:add'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$tittel=elgg_echo("bf_widgets:jo");
$tittel= "<a href=\"\">$tittel</a>"; 

$content = $addbtn . $content ;

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