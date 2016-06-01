<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings
$count = sanitise_int($vars["entity"]->bf_widget_rated_photos, false);
if(empty($count)){
        $count = 1;
}


              
$options = array(
        'type' => 'object',
        'subtype' => 'image',
        'limit' => $count,
        'annotation_name' => 'fivestar',
        'calculation' => 'avg',
        'order_by' => 'annotation_calculation desc',
        'full_view' => false,
        'list_type_toggle' => false,
        'list_type' => 'gallery',
        'pagination' => false,
        'gallery_class' => 'bf-gallery-widget',
);
$tittel = elgg_echo("bf_widgets:mr");

$polls  = elgg_get_entities_from_annotation_calculation($options);   

	if($polls){
		$polls_ = array();		
		foreach($polls as $pollpost){
			if($pollpost->owner_guid != $owner_guid){
				$content.= elgg_view("bfrens_widgets/widget_tidy", array('entity' => $pollpost));
			}else{
				$polls_[] = $pollpost;
			}
		}	
	}
	
	if(count($polls_) >= count($polls))
	{
		$content= "<div class=\"contentWrapper\"><p>" . elgg_echo("bf_widgets:no_photo") . "</p></div>";
	}


$vars['bfrens_wid_title']=$tittel; 
$filename=dirname(__FILE__)."/bfrens_content.php";
if (file_exists($filename)) {
$vars['bfrens_wid_link']=basename(__DIR__); 
}
$vars['bfrens_wid_content']=$content;

$body = elgg_view_layout("bfrens_widgets", $vars);

echo $body;