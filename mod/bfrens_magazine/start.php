<?php


 
function bfrens_magazine_init() {



elgg_register_page_handler('magazine', 'magazine_page_handler');
}
 
function magazine_page_handler($page) {


$base_lists = elgg_get_plugins_path() . 'bfrens_magazine/pages';

require "$base_lists/magazine.php";

 return true;
 
}

 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_magazine_init');

?>