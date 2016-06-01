<?php
/**
 * Elgg header logo
 */

$logo = elgg_get_site_url()."_graphics/spacer.gif";
$site_url = elgg_get_site_url();
?>

<div class="float">
	<a href="<?php echo $site_url; ?>">
	<?php echo "<img class='elgg-propic-logo' src='{$logo}' border='0' width='400' height='140'>"; ?>
	</a>
	
</div>