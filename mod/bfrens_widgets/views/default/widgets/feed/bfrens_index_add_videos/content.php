<?php


$options = array(
	'type' => 'object',
	'subtype' => 'videos',
	'limit' => 2,
	'full_view' => FALSE,
	'pagination' => FALSE,
);
                                  
$tittel = elgg_echo("bf_widgets:feed:av");
$tittel= "<a href=\"videos/all\">$tittel</a>"; 

$polls  = elgg_get_entities($options);   

	if($polls){
		$polls_ = array();		
		foreach($polls as $pollpost){
			if($pollpost->owner_guid != $owner_guid){
				$content.= elgg_view("bfrens_widgets/widget_video_feed", array('entity' => $pollpost));
			}else{
				$polls_[] = $pollpost;
			}
		}	
	}
	
	if(count($polls_) >= count($polls))
	{
$content .= elgg_view('output/img', array(
	'src' => "http://image.shutterstock.com/display_pic_with_logo/350266/350266,1263571122,2/stock-photo-indian-teenager-girl-with-pointing-fingers-44546956.jpg",
	'class' => '',
	'style' => "width:405px;",
));


	} 




$addbtn = elgg_view('output/url', array(

    'href' => "videos/add_lightbox/" . $logged_in_guid,

    'text' => elgg_echo("videos:add"),
    
    'title' => elgg_echo('videos:add'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-04.jpg",
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