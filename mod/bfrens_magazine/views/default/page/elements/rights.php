<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

?>
<div align="center" class="elgg-page-site-rights">
<?php

echo elgg_view('output/url', array(
	'href' => 'site/about',
	'text' => elgg_echo('bf_index:about'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/team',
	'text' => elgg_echo('bf_index:team'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/job',
	'text' => elgg_echo('bf_index:job'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/leagal',
	'text' => elgg_echo('bf_index:leagal'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/community',
	'text' => elgg_echo('bf_index:community'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/help',
	'text' => elgg_echo('bf_index:help'),
	'is_trusted' => true,
));
echo elgg_echo(' : ');
echo elgg_view('output/url', array(
	'href' => 'site/contact',
	'text' => elgg_echo('bf_index:contact'),
	'is_trusted' => true,
));


?>
<br>
<?php

echo elgg_echo('bf_index:rights ');
	
	?>
</div>