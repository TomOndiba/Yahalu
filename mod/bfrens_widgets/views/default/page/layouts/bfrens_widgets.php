<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$tittel = $vars['bfrens_wid_title']; 
$link = $vars['bfrens_wid_link']; 
$content = $vars['bfrens_wid_content'];
$discription = $vars['bfrens_wid_discription']; 
$noitem = $vars['bfrens_wid_noitem']; 

?>
<div class="elgg-image-block clearfix">
<div class="bfrens-widgt bfrens-widgt-red ">
<div class="bfrens-widgt-header">
<div class="bfrens-widgt-header-titel float">
<?php echo $tittel; ?>
</div>

<?php

if (isset($vars['bfrens_wid_link'])) {

elgg_load_js('lightbox');
elgg_load_css('lightbox');
 
echo elgg_view('output/url', array(
    'href' => "bfrens_widgets/?widget=".$link ,
    'text' => "", 
    'class' => "bfrens-widgt-fullbutn elgg-lightbox-bfrens float-alt",      
));
}
?>
</div>

<?php
 echo $discription; 
 ?>
 
<?php
echo  $content;
?>
</div>
</div>