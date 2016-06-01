<?php


 
function bfrens_career_init() {

elgg_extend_view('css/elgg', 'career_css');


elgg_register_page_handler('career', 'career_page_handler');
$base_dir = elgg_get_plugins_path() . 'bfrens_career/actions/career';

elgg_register_action("career/career_test", "$base_dir/career_test.php");
}
 
function career_page_handler($page) {

	if (!isset($page[0])) {
		$page[0] = 'test';
	}
	
	if (isset($page[1])) {
		set_input('username', $page[1]);
	}
	else{
	$username=get_loggedin_user()->username;
		set_input('username', $username);
	}


$base_lists = elgg_get_plugins_path() . 'bfrens_career/pages/career';

switch ($page[0]) {
		case 'test':
			include "$base_lists/career_test.php";
			break;
		default:
			return false;
	}
	return true;
 
}

 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_career_init');

?>