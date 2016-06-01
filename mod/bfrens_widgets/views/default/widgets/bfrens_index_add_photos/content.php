<?php
$owner = get_loggedin_userid();

$options = array('type' => 'object',
                                   'subtype' => 'image',
                                   'owner_guid' => $owner,
                                   'limit' => 1,
                                   'pagination' => false,
                                   'full_view' => false,
                                  );
                                  

$polls  = elgg_get_entities($options);   

	if($polls){
		$polls_ = array();		
		foreach($polls as $pollpost){
			if($pollpost->owner_guid != $owner_guid){
				$content.= elgg_view("bfrens_widgets/widget_photo", array('entity' => $pollpost));
			}else{
				$polls_[] = $pollpost;
			}
		}	
	}
	



$addbtn = elgg_view('output/url', array(

    'href' => "ajax/view/photos/selectalbum/?owner_guid=" . $logged_in_guid,

    'text' => elgg_echo("photos:addphotos"),
    
    'title' => elgg_echo('photos:addphotos'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$content = "<div class=\"addbtn-fix\">$addbtn</div>". $content ;

$tittel=elgg_echo("bf_widgets:ap");
$tittel= "<a href=\"photos/siteimagesowner\">$tittel</a>"; 


$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-07.jpg",
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