                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

$count = sanitise_int($vars["entity"]->bf_widget_rated_photos, false);
if(empty($count)){
        $count = 12;
}

?>
<div>
        <?php echo elgg_echo("bf_widgets:no_photo"); ?><br />
        <?php echo elgg_view("input/text", array("name" => "params[bf_widget_rated_photos]", "value" => $count, "size" => "4", "maxlength" => "4")); ?>
</div>