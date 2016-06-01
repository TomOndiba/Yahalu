<?php


 
function bfrens_chat_init() {


elgg_register_page_handler('katha', 'chat_page_handler');
}
 
function chat_page_handler($page) {



$base_lists = elgg_get_plugins_path() . 'bfrens_chat/pages';

require "$base_lists/chat.php";

 return true;
 
}

 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_chat_init');

?>