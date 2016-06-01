<?php
/**
 * Elgg header logo
 */
$logo = elgg_get_site_url()."_graphics/spacer.gif";
$user = elgg_get_logged_in_user_entity();
$site_url = elgg_get_site_url();

?>

<div class="elgg-propic-site float">	
<?php
$vars['size'] = 'large2';
$vars['override'] = true;
echo elgg_view('icon/user/default', $vars);
?>	
</div>
<div class="float">
<h1>

</h1>
<div class="elgg-propic-name">
<?php echo $user->name; 
?>
</div>
<div class="userpoints_profile">
	<div><span><?php echo elgg_echo('elggx_userpoints:upperplural') . ': ' . $user->userpoints_points;?></span></div>
</div>

<?php 
if ($user->badges_badge){
                $ts = time ();
                $token = generate_action_token ( $ts );
                $tokenRequest = "&__elgg_token=$token&__elgg_ts=$ts";
                $badge_url = elgg_get_site_url() . 'action/badges/view?' . $tokenRequest . '&file_guid=' .$user->badges_badge;
                $badge_style = "width: 50px;
                height: 50px;
                display: block;
                position: absolute;
                border: 1px solid #CCC;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                background: white;";
 }               
    if ($guid = $user->badges_badge) {
        $badge = get_entity($guid);
    }
?>
        <div style="<?php echo $badge_style; ?>">
        <img title="<?php echo $badge->title; ?>" src="<?php echo $badge_url; ?>">
        </div>
</div>