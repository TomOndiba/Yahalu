<?php


$options = array(
	'type' => 'object',
	'subtype' => 'gift',
	'limit' => 8,

);
                                  
$tittel = elgg_echo("bf_widgets:feed:ag");
$tittel= "<a href=\"/gifts\">$tittel</a>"; 

$gifts = elgg_get_entities($options);   


	
	if(empty($gifts))
	{
$content = elgg_view('output/img', array(
	'src' => "http://image.shutterstock.com/display_pic_with_logo/350266/350266,1263571122,2/stock-photo-indian-teenager-girl-with-pointing-fingers-44546956.jpg",
	'class' => '',
	'style' => "width:405px;",
));
}
else{
foreach($gifts as $gift) {
	// Select Receiver and Sender
	$sender = get_entity($gift->owner_guid);
	$receiver = get_entity($gift->receiver);

	if ((elgg_instanceof($sender, 'user')) && (elgg_instanceof($receiver, 'user'))) {

		$gifttext = elgg_get_plugin_setting('gift_'.$gift->gift_id, 'gifts');
		$imagefile = "gift_".$gift->gift_id."_tiny.jpg";
		$imgfile =  dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))))."/gifts/images/".$imagefile;		

		$receiver_link = "<a href=\"{$receiver->getURL()}\">{$receiver->name}</a>";
		$sender_link = "<a href=\"{$sender->getURL()}\">{$sender->name}</a>";
		$gift_link = "<a href=\"" .elgg_get_site_url()."gifts/" . $receiver->username . "/singlegift?guid={$gift->guid}\">".$gifttext."</a>";

		$Url = $gift->getURL();

		$content .= "<div class=\"gifts_widget_wrapper\">";
		$content .= "<a href=\"" .elgg_get_site_url()."gifts/" . $receiver->username . "/singlegift?guid={$gift->guid}\">";
		if (file_exists($imgfile)) {
			$content .= "<div class=\"gifts_widget_icon\"><img src=\"".elgg_get_site_url().'mod/gifts/images/'.$imagefile."\" /></div>";
		} else {
			$content .= "<div class=\"gifts_widget_icon\"><img src=\"".elgg_get_site_url()."mod/gifts/images/noimage.jpg\" /></div>";
		}
		$content .= "</a>";
		$content .= "<div class=\"gifts_widget_content\">";
		$content .= elgg_echo("gifts:object", array($receiver_link, $gift_link, $sender_link));
		$content .= "</div>";
		$content .= "</div>";
	}
}
}


	 


$user=get_loggedin_user();

$addbtn = elgg_view('output/url', array(

    'href' => "gifts/sachi/add_lightbox",

    'text' => elgg_echo("gifts:sendgifts"),
    
    'title' => elgg_echo('gifts:sendgifts'),
     
    'class' => "elgg-button elgg-button-action elgg-lightbox float-alt bf-widgets-add-btn",
    
    'align' => "",        
));

$dis=elgg_view('output/img', array(
	'src' => "/img/widget/Banners-06.jpg",
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