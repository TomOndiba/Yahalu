<?php

elgg_register_event_handler('init', 'system', 'bfrens_menu_init');



function bfrens_menu_pagesetup_handler() {



$user = elgg_get_logged_in_user_entity();

elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'administration');
elgg_unregister_menu_item('topbar', 'usersettings');
elgg_unregister_menu_item('topbar', 'logout');
elgg_unregister_menu_item('topbar', 'messages');
elgg_unregister_menu_item('topbar', 'friends');



}


function bfrens_menu_init() {

elgg_extend_view('css/elgg', 'menu_css');
elgg_extend_view('css/buttons', 'menu_button_css');

elgg_register_event_handler('pagesetup', 'system', 'bfrens_menu_pagesetup_handler', 1000);



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





elgg_register_menu_item('topbar', array(

    'name' => 'Home',

    'href' => "/",

    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-home\"></span>",

    'priority' => 1,
    
    'title' => elgg_echo('home'),

    'link_class' => 'elgg-topbar-logo'

));




elgg_register_menu_item('topbar', array(

    'name' => 'event',

    'href' => "/events",

    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-calander\"></span>",

    'priority' => 3,
    
    'title' => elgg_echo('item:object:event'),

    'link_class' => 'elgg-topbar-logo'

));

elgg_register_menu_item('topbar', array(

    'name' => 'reminder',

    'href' => "/celebrations/celebrations/",

    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-bell\"></span>",

    'priority' => 4,
    
    'title' => elgg_echo('celebrations:shorttitle'),

    'link_class' => 'elgg-topbar-logo'

));

elgg_register_menu_item('topbar', array(

    'name' => 'fedd',

    'href' => "/feed",

    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-global\"></span>",

    'priority' => 5,
    
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



elgg_register_menu_item('topbar', array(

    'name' => 'messages2',

    'href' => "messages/inbox/" . elgg_get_logged_in_user_entity()->username,

    'text' => $text."<span class=\"bfrens-menu-icon bfrens-menu-icon-mail\"></span>",

    'priority' => 6,
    
    'title' => $tooltip,

    'link_class' => 'elgg-topbar-logo'

));




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

'text' => $text."<span class=\"bfrens-menu-icon bfrens-menu-icon-request\"></span>",

"title" => $tooltip,

"priority" => 7,

'link_class' => 'elgg-topbar-logo'

));



elgg_register_menu_item('topbar', array(

"name" => "online",

"href" => "members/online",

'text' => $text."<span class=\"bfrens-menu-icon bfrens-menu-icon-users\"></span>",

 'title' => elgg_echo('members'),

"priority" => 8,

'link_class' => 'elgg-topbar-logo'

));









elgg_register_menu_item('topbar', array(

    'name' => 'logout2',

    'href' => "action/logout",

    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-logout\"></span>",

    'priority' => 199,
    
    'title' => elgg_echo('logout'),

    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'

));

        $user = elgg_get_logged_in_user_entity();
        
elgg_register_menu_item('topbar', array(
        
    'href' => "/settings/user/$user->username",
            
    'name' => 'setting2',
            
    'text' => "<span class=\"bfrens-menu-icon bfrens-menu-icon-wrench\"></span>",
    
    'title' => elgg_echo('settings'),
            
    'priority' => 3,
            
    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'

        ));

$viewer = elgg_get_logged_in_user_entity();

$logo_url = $viewer->getIconURL('small');

elgg_register_menu_item('topbar', array(

    'name' => 'com',

    'href' => "/profile/$user->username",

    'text' =>  "<img class=\"bfrens-menu-icon-profile\" src=\"$logo_url\" alt=\"$user->name\" width=\"37px\" height=\"37px\" />",

    'priority' => 2,
    
    'title' => $user->name,

    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'
));
        
elgg_register_menu_item('topbar', array(
        
    'href' => "/profile/$user->username",
            
    'name' => 'account',
            
    'text' => $user->username,
            
    'title' => $user->username,
            
    'priority' => 1,
            
    'link_class' => 'elgg-topbar-alt',
    
    'section' => 'alt'

        ));
}
}