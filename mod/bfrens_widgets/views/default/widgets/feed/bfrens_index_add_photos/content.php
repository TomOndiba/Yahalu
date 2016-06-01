<?php

$options = array('type' => 'object',
                                   'subtype' => 'image',
                                   'limit' => 2,
                                   'pagination' => false,
                                   'full_view' => false,
                                  );
                                  
$tittel = elgg_echo("bf_widgets:feed:ap");
$tittel= "<a href=\"photos/siteimagesall\">$tittel</a>"; 

$polls  = elgg_get_entities($options);   

	if($polls){
		$polls_ = array();		
		foreach($polls as $pollpost){
			if($pollpost->owner_guid != $owner_guid){
				$content.= elgg_view("bfrens_widgets/widget_feed_photo", array('entity' => $pollpost));
			}else{
				$polls_[] = $pollpost;
			}
		}	
	}
	



	

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