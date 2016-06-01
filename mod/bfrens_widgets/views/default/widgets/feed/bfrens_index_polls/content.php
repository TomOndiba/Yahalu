<?php

	
	$tittel = elgg_echo("bf_widgets:feed:po");
	
	//the page owner
	$owner_guid = $vars['entity']->owner_guid;
	$owner = page_owner_entity();
	
 $defaults = array(
'types'                 =>  'object',
'subtypes'              =>  'poll',
'owner_guid' => '2717',
'order_by'              =>  'e.time_created desc',
'limit'                 =>  1,
);	


$polls = elgg_get_entities($defaults);	
	if($polls){
		$polls_ = array();		
		foreach($polls as $pollpost){
			if($pollpost->owner_guid != $owner_guid){
				$content.= elgg_view("bfrens_widgets/widget_polls", array('entity' => $pollpost));
			}else{
				$polls_[] = $pollpost;
			}
		}	
	}
	
	if(count($polls_) >= count($polls))
	{
		$content= "<div class=\"contentWrapper\"><p>" . elgg_echo("polls:widget:nonefound") . "</p></div>";
	}
	
$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-05.jpg",
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