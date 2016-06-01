<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

$count = $vars["entity"]->bf_widget_text_scroller_text;
if(empty($count)){
        $count = "Yahalu.com";
}
$speed= sanitise_int($vars["entity"]->bf_widget_text_scroller_speed, false);
if(empty($speed)){
        $speed= 30;
}

?>
<div>
        <?php echo elgg_echo("bf_widgets:ts:text"); ?><br />
        <?php echo elgg_view("input/longtext", array("name" => "params[bf_widget_text_scroller_text]", "value" => $count)); ?>
        <?php echo elgg_echo("bf_widgets:ts:speed"); ?><br />
        <?php echo elgg_view("input/text", array("name" => "params[bf_widget_text_scroller_speed]", "value" => $speed)); ?>
</div>