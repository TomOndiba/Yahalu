<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */
 
 if (elgg_is_logged_in()) {
 
 $topbar = elgg_view('page/elements/topbar', $vars);
?>
	<div class="elgg-page-topbar-new">
		<div class="elgg-inner">
			<?php echo $topbar; ?>
		</div>
	</div>
<?php
}
else
{

$login_url = elgg_get_site_url();
if (elgg_get_config('https_login')) {
	$login_url = str_replace("http:", "https:", elgg_get_site_url());
}

elgg_load_js('lightbox');
elgg_load_css('lightbox');

?>
<div class="elgg-inner">
<div align="center">
<?php



		echo elgg_view('output/url', array(
			'href' => 'rgi/login',
			'class' => 'elgg-button elgg-lightbox',
			'text' => elgg_echo('login'),
		)); 

		echo elgg_view('output/url', array(
			'href' => 'rgi/register',
			'class' => 'elgg-button elgg-lightbox',
			'text' => elgg_echo('register'),
		)); 
		
		echo elgg_view('output/url', array(
		'href' => 'rgi/forgotpassword',
		'class' => 'elgg-button elgg-lightbox',
		'text' => elgg_echo('user:password:lost'),	
		)); 	 		
	?>
	</div></div>
<?php
}