<?php
/**
 * Elgg header logo
 */


?>
<div class="bfrens_heder">
<div class="elgg-propic-site float">	
<?php
$vars['size'] = 'large2';
$vars['override'] = true;
echo elgg_view('icon/user/default', $vars);
?>	
</div>
<div class="float">
<?php
echo elgg_view('page/elements/header_bfrens_logo');
echo elgg_view('page/elements/header_bfrens_button');
?>
</div>
<?php
echo elgg_view('page/elements/header_bfrens_name');
?>
</div>
<?php
echo elgg_view('page/elements/header_lang_default');