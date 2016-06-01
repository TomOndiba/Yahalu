<?php


$tittel=elgg_echo("thewire");

$content = '';
if (elgg_is_logged_in()) {
	$form_vars = array('class' => 'thewire-form');
	$content .= elgg_view_form('thewire/add', $form_vars);
	$content .= elgg_view('input/urlshortener');
}

$content .= elgg_list_river(array(
	'type' => 'object',
	'subtype' => 'thewire',
	'limit' => '80',
	'pagination' => false,
));

?>
<div class="bfrens-widgt bfrens-widgt-red">
<div class="bfrens-widgt-header">
<?php 

?>
</div>
<?php

echo  $content;

?>
</div>