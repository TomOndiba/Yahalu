<?php

require_once dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/start.php";
require_once dirname(__FILE__)."/src/phpfreechat.class.php";

$params['language'] = 'en_US';

$params['serverid'] =  md5(__FILE__);
$params['debug'] =  false;
$params['title'] =  elgg_get_plugin_setting('chat_title', 'chat_pfc');
$params['nick'] =  elgg_get_logged_in_user_entity()->username;

$img_icon = elgg_get_logged_in_user_entity()->getIconURL('medium');
$params["nickmeta"]    = array("avatar" => $img_icon);



if (elgg_is_admin_logged_in()){
  $params['isadmin'] = true;
} else {
  $params['isadmin'] = false;
}

$chat = new phpFreeChat( $params );

$chat->printChat();

?>

