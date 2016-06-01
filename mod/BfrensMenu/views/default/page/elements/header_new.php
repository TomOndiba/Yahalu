<?php
/**
 * Elgg header logo
 */
 $site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_url2=$site_url."_graphics/unnamed.png";
?>

<div class="elgg-propic-site">
<?php
$vars['size'] = 'large2';
echo elgg_view('icon/user/default', $vars);
?>
<div align="center" class="elgg-propic-site2">
	<a class="login-dropdown2" href="<?php echo $site_url; ?>">		
		<?php echo "<img src='{$site_url2}' border='0' width='400' height='140'>"; ?>
	</a>
</div>
</div>


	