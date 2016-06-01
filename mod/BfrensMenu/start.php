<?php

elgg_register_event_handler('init', 'system', 'BfrensMenu_init');



function BfrensMenu_pagesetup_handler() {

$user = elgg_get_logged_in_user_entity();

elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'administration');
elgg_unregister_menu_item('topbar', 'usersettings');
elgg_unregister_menu_item('topbar', 'logout');
elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'messages');
elgg_unregister_menu_item('topbar', 'friends');


}


function BfrensMenu_init() {

elgg_register_event_handler('pagesetup', 'system', 'BfrensMenu_pagesetup_handler', 1000);



$icon_sizes = array(
			'topbar' => array('w' => 16, 'h' => 16, 'square' => TRUE, 'upscale' => TRUE),
			'tiny' => array('w' => 25, 'h' => 25, 'square' => TRUE, 'upscale' => TRUE),
			'small' => array('w' => 40, 'h' => 40, 'square' => TRUE, 'upscale' => TRUE),
			'medium' => array('w' => 100, 'h' => 100, 'square' => TRUE, 'upscale' => TRUE),
			'medium2' => array('w' => 180, 'h' => 180, 'square' => TRUE, 'upscale' => TRUE),
			'large' => array('w' => 200, 'h' => 200, 'square' => FALSE, 'upscale' => FALSE),		
			'master' => array('w' => 550, 'h' => 550, 'square' => FALSE, 'upscale' => FALSE),
			'large2' => array('w' => 200, 'h' => 200, 'square' => FALSE, 'upscale' => FALSE),
);

elgg_set_config('icon_sizes', $icon_sizes);

if (elgg_is_logged_in()) {



$logo_url = elgg_get_site_url() . "_graphics/icon/top/home.png";

elgg_register_menu_item('topbar', array(

    'name' => 'Home',

    'href' => "/",

    'text' => "<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 1,
    
    'title' => elgg_echo('home'),

    'link_class' => 'elgg-topbar-logo'

));

$logo_url = elgg_get_site_url() . "_graphics/icon/top/feed.png";

elgg_register_menu_item('topbar', array(

    'name' => 'Index',

    'href' => "/activity",

    'text' => "<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 2,
    
    'title' => elgg_echo('activity'),

    'link_class' => 'elgg-topbar-logo'

));

	
	
		$class = "elgg-icon-mail";
		$text = "<span class='$class'></span>";
		$tooltip = elgg_echo("messages");
		
		// get unread messages
		$num_messages = (int)messages_count_unread();
		if ($num_messages != 0) {
			$text .= "<span class=\"messages-new\">$num_messages</span>";
			$tooltip .= " (" . elgg_echo("messages:unreadcount", array($num_messages)) . ")";
		}

$logo_url = elgg_get_site_url() . "_graphics/icon/top/msg.png";

elgg_register_menu_item('topbar', array(

    'name' => 'messages2',

    'href' => "messages/inbox/" . elgg_get_logged_in_user_entity()->username,

    'text' => $text."<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 3,
    
    'title' => $tooltip,

    'link_class' => 'elgg-topbar-logo'

));



$logo_url = elgg_get_site_url() . "_graphics/icon/top/pages.png";

elgg_register_menu_item('topbar', array(

    'name' => 'msg',

    'href' => "pages/all",

    'text' => "<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 4,
    
    'title' => elgg_echo('profile'),

    'link_class' => 'elgg-topbar-logo'

));


$viewer = elgg_get_logged_in_user_entity();

$logo_url = $viewer->getIconURL('small');

elgg_register_menu_item('topbar', array(

    'name' => 'com',

    'href' => "/profile/$user->name",

    'text' =>  "<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 5,
    
    'title' => $user->name,

    'link_class' => 'elgg-topbar-logo'

));

$logo_url = elgg_get_site_url() . "_graphics/icon/top/msg.png";

		$class = "elgg-icon-mail";
		$text = "<span class='$class'></span>";
		$tooltip = elgg_echo("friend_request:menu");
		
	$user = elgg_get_logged_in_user_entity();
	$options = array(
				"type" => "user",
				"count" => true,
				"relationship" => "friendrequest",
				"relationship_guid" => $user->getGUID(),
				"inverse_relationship" => true
			);

		$num_messages = elgg_get_entities_from_relationship($options);
		if ($num_messages != 0) {
			$text .= "<span class=\"messages-new\">$num_messages</span>";
			$tooltip .= " (" . elgg_echo("messages:unreadcount", array($num_messages)) . ")";
		}


elgg_register_menu_item('topbar', array(

"name" => "friend_request2",

"href" => "friend_request/" . $user->username,

'text' => $text."<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

"title" => $tooltip,

"priority" => 6,

'link_class' => 'elgg-topbar-logo'

));







$logo_url = elgg_get_site_url() . "_graphics/icon/top/logout.png";

elgg_register_menu_item('topbar', array(

    'name' => 'logout2',

    'href' => "action/logout",

    'text' => "<img src=\"$logo_url\" alt=\"$user->name\" width=\"90%\" height=\"90%\" />",

    'priority' => 199,
    
    'title' => elgg_echo('logout'),

    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'

));

        $user = elgg_get_logged_in_user_entity();

        
        elgg_register_menu_item('topbar', array(
        
    'href' => "/profile/$user->username",
            
    'name' => 'account',
            
    'text' => $user->name,
            
    'title' => $user->name,
            
    'priority' => 1,
            
    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'

        ));
}
}