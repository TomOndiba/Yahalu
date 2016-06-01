<?php


$tittel=elgg_echo("bf_widgets:tw");

$content = '';
if (elgg_is_logged_in()) {
	$form_vars = array('class' => 'thewire-form');
	$content .= elgg_view_form('tweets/add', $form_vars);
	$content .= elgg_view('input/urlshortener');
}

$content .= elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'tweets',
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