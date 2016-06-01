<?php
/**
 * Elgg header logo
 */

?>
<div class=" float-alt">
<div class="elgg-propic-button">
<ul><li>	
<?php
echo elgg_view('output/url', array(

    'href' => "/feed",

    'text' => "",
    
    'title' => elgg_echo('activity'),
    
    'class' => "elgg-button-bfrens-logo elgg-button-bfrens-icon bfrens-icon-newsfeed",
        
));
?>
</li><li>	
<?php
echo elgg_view('output/url', array(

    'href' => "/magazine",

    'text' => "",
    
    'title' => elgg_echo('magazine'),
    
    'class' => "elgg-button-bfrens-logo elgg-button-bfrens-icon bfrens-icon-cup",
        
));

?>
</li><li>	
<?php
echo elgg_view('output/url', array(

    'href' => "/blog/all",

    'text' => "",
    
    'title' => elgg_echo('blog'),
    
    'class' => "elgg-button-bfrens-logo elgg-button-bfrens-icon bfrens-icon-bulb",
        
));
?>
</li><li>	
<?php
echo elgg_view('output/url', array(


    'text' => "",
    
    'onClick' => "javascript:window.open('/chat','null','width=650,height=765,toolbar=no,menubar=no,scrollbars=yes,resizable=yes,location=no,directories=no,status=no');return false",
    
    'title' => elgg_echo('chat'),
    
    'class' => "elgg-button-bfrens-logo elgg-button-bfrens-icon bfrens-icon-chat",
        
));

?>
</li></ul>
</div>
</div>