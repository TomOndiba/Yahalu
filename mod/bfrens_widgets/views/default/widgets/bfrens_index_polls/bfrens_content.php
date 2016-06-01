<?php

	
	$tittel = elgg_echo("polls");
	
	//the page owner
	$owner_guid = $vars['entity']->owner_guid;
	$owner = page_owner_entity();
	$owner2 = get_loggedin_userid();
	
 $defaults = array(
'types'                 =>  'object',
'subtypes'              =>  'poll',
'owner_guid' => $owner2,
'order_by'              =>  'e.time_created desc',
'limit'                 =>  10,
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

?>
<div class="bfrens-widgt bfrens-widgt-red">
<div class="bfrens-widgt-header">
<?php 

?>
</div>
<?php

echo  $content;

?>
</div>		