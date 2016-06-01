<?php
$owner = get_loggedin_userid();

$options = array(
	'type' => 'object',
	'subtype' => 'gift',
	'limit' => 1,
	'pagination' => false,

);
                                  

$content  = elgg_list_entities($options);   


	


$user=get_loggedin_user();

$addbtn = elgg_view('output/url', array(

    'href' => "gifts/$user->username/add_lightbox",

    'text' => elgg_echo("gifts:sendgifts"),
    
    'title' => elgg_echo('gifts:sendgifts'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$tittel=elgg_echo("bf_widgets:ag");
$tittel= "<a href=\"/gifts\">$tittel</a>"; 

$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-06.jpg",
	'class' => '',
	'style' => "width:437px; margin: -15px -15px 5px -15px;",
));
$vars['bfrens_wid_discription']=$dis;

$content = $addbtn . $content ;

$vars['bfrens_wid_title']=$tittel; 

$filename=dirname(__FILE__)."/bfrens_content.php";
if (file_exists($filename)) {
$vars['bfrens_wid_link']=basename(__DIR__); 
}
$vars['bfrens_wid_content']=$content;

$body = elgg_view_layout("bfrens_widgets", $vars);

echo $body;