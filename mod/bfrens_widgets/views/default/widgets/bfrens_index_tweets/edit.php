<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

$count = sanitise_int($vars["entity"]->bf_widget_the_wire, false);
if(empty($count)){
        $count = 12;
}

?>
<div>
        <?php echo elgg_echo("bf_widgets:no_wire"); ?><br />
        <?php echo elgg_view("input/text", array("name" => "params[bf_widget_the_wire]", "value" => $count, "size" => "4", "maxlength" => "4")); ?>
</div>