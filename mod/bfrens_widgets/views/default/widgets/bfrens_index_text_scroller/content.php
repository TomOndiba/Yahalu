<?php
/**
 * Tidypics Plugin
 *
 * Index page Latest Photos widget for Widget Manager plugin
 *
 */

// get widget settings
$count = $vars["entity"]->bf_widget_text_scroller_text;
if(empty($count)){
        $count = "Yahalu.com2";
}
$speed= sanitise_int($vars["entity"]->bf_widget_text_scroller_speed, false);
if(empty($speed)){
        $speed= 30;
}

?>

<marquee behavior="scroll" direction="left" scrollamount="<?php echo $speed; ?>">
<?php echo $count; ?>
</marquee>