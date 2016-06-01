<?php


 
function bfrens_index_init() {
elgg_extend_view('css/elgg', 'index_css');

elgg_register_page_handler('site', 'site_page_handler');

elgg_register_page_handler('rgi', 'rgi_page_handler');
}
 
function rgi_page_handler($page) {

	if (!isset($page[0])) {
		return false;
	}

$base_lists = elgg_get_plugins_path() . 'bfrens_index/pages';
	switch ($page[0]) {
	
                case 'register':
                require "$base_lists/regi.php";
                break;
                
                case 'forgotpassword':
                require "$base_lists/forgotten_password_new.php";
                break;
                
                case 'login':
                require "$base_lists/login_new.php";
                break;
              
                default:
		return false;
}
 return true;
 
}
function site_page_handler($page) {

	if (!isset($page[0])) {
		return false;
	}

$base_lists = elgg_get_plugins_path() . 'bfrens_index/pages/site';
	switch ($page[0]) {
	
                case 'about':
                require "$base_lists/about.php";
                break;
                
                case 'team':
                require "$base_lists/team.php";
                break;
                
                case 'job':
                require "$base_lists/job.php";
                break;
                
                case 'leagal':
                require "$base_lists/leagal.php";
                break;
                
                case 'community':
                require "$base_lists/community.php";
                break;
                
                case 'help':
                require "$base_lists/help.php";
                break;
                
                case 'contact':
                require "$base_lists/contact.php";
                break;
                
                default:
		return false;
}
 return true;
}
 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_index_init');

?>