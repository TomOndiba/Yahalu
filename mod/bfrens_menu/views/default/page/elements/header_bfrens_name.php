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
                margin-left: 30px;
                height: 50px;";
 }               
    if ($guid = $user->badges_badge) {
        $badge = get_entity($guid);
    }
?>


<div class="elgg-propic-name">
<a href="/profile/<?php echo $user->username; ?>">
<?php echo $user->name; 
?>
</a>
</div>
	
	<div class="float" style="<?php echo $badge_style; ?>">
	<img title="<?php echo $badge->title; ?>" src="<?php echo $badge_url; ?>">       
	</div>

	<div class="userpoints_profile_bfrens float">
	<div><span><?php echo elgg_echo('elggx_userpoints:upperplural') . ': ' . $user->userpoints_points;?></span></div>
	</div>