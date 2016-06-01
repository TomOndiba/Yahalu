<?php
/**
 * Elgg header logo
 */

$user = elgg_get_logged_in_user_entity();

if ($user->badges_badge){
                $ts = time ();
                $token = generate_action_token ( $ts );
                $tokenRequest = "&__elgg_token=$token&__elgg_ts=$ts";
                $badge_url = elgg_get_site_url() . 'action/badges/view?' . $tokenRequest . '&file_guid=' .$user->badges_badge;
                $badge_style = "width: 50px;
                margin-left: 20px;
                height: 50px;";
 }               
    if ($guid = $user->badges_badge) {
        $badge = get_entity($guid);
    }
    
$name = "<div><div class=\"elgg-propic-name\">echo ."$user->name;". </div>";

$badge = "<div class=\"float\" style=."echo $badge_style; ".>
	<img title=."echo $badge->title;". src=." echo $badge_url;".>       
	</div>";
$point = "	<div class=\"userpoints_profile_bfrens floa\t">
	<div><span>."echo elgg_echo('elggx_userpoints:upperplural') . ': ' . $user->userpoints_points;".</span></div>
	</div>";
echo <<<HTML



	
	




HTML;