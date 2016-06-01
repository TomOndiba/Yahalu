<?php


 
function bfrens_widgets_init() {

elgg_extend_view('css/elgg', 'bfrens_widgets_css');

elgg_register_page_handler('bfrens_widgets', 'bfrens_widgets_page_handler');


	if (elgg_is_active_plugin('widget_manager')) {

	if (elgg_is_active_plugin('tidypics')) {
               elgg_register_widget_type('bfrens_index_commented_photos', elgg_echo('bf_widgets:mc'), elgg_echo('bf_widgets:mc:info'), "index,magazine");
    
               elgg_register_widget_type('bfrens_index_rated_photos', elgg_echo('bf_widgets:mr'), elgg_echo('bf_widgets:mr:info'), "index,magazine");
               
               elgg_register_widget_type('bfrens_index_liked_photos', elgg_echo('bf_widgets:ml'), elgg_echo('bf_widgets:ml:info'), "index,magazine");
                
               elgg_register_widget_type('bfrens_index_viewed_photos', elgg_echo('bf_widgets:mv'), elgg_echo('bf_widgets:mv:info'), "index,magazine"); 
               
               elgg_register_widget_type('bfrens_index_add_photos', elgg_echo('bf_widgets:ap'), elgg_echo('bf_widgets:ap:info'), "index"); 
           	}  
           
         if (elgg_is_active_plugin('thewire')) {  
               elgg_register_widget_type('bfrens_index_thewire', elgg_echo('bf_widgets:twire'), elgg_echo('bf_widgets:twire:info'), "index,magazine");    
           }   
           
               elgg_register_widget_type('bfrens_index_add_media', elgg_echo('bf_widgets:pv'), elgg_echo('bf_widgets:pv:info'), "index,magazine"); 
               
               elgg_register_widget_type('bfrens_index_text_scroller', elgg_echo('bf_widgets:ts'), elgg_echo('bf_widgets:ts:info'), "index,magazine"); 
               
         if (elgg_is_active_plugin('polls')) {      
               elgg_register_widget_type('bfrens_index_polls', elgg_echo('bf_widgets:po'), elgg_echo('bf_widgets:po:info'), "index,magazine");    
               }
               
         if (elgg_is_active_plugin('bfrens_tweets')) {       
               elgg_register_widget_type('bfrens_index_tweets', elgg_echo('bf_widgets:tw'), elgg_echo('bf_widgets:tw:info'), "index,magazine");               
               }  
                   
             
        
        elgg_register_widget_type('bfrens_index_add_joks', elgg_echo('bf_widgets:jo'), elgg_echo('bf_widgets:jo:info'), "index");            
             
	elgg_register_widget_type('bfrens_index_add_videos', elgg_echo('bf_widgets:av'), elgg_echo('bf_widgets:av:info'), "index"); 
	
	elgg_register_widget_type('bfrens_index_add_gift', elgg_echo('bf_widgets:ag'), elgg_echo('bf_widgets:ag:info'), "index"); 
	
	
	
	elgg_register_widget_type('feed/bfrens_index_add_gift', elgg_echo('bf_widgets:ag'), elgg_echo('bf_widgets:ag:info'), "feed"); 
	
	elgg_register_widget_type('feed/bfrens_index_add_joks', elgg_echo('bf_widgets:jo'), elgg_echo('bf_widgets:jo:info'), "feed"); 
	
	elgg_register_widget_type('feed/bfrens_index_add_photos', elgg_echo('bf_widgets:ap'), elgg_echo('bf_widgets:ap:info'), "feed"); 
	
	elgg_register_widget_type('feed/bfrens_index_add_videos', elgg_echo('bf_widgets:av'), elgg_echo('bf_widgets:av:info'), "feed");
	
	elgg_register_widget_type('feed/bfrens_index_polls', elgg_echo('bf_widgets:po'), elgg_echo('bf_widgets:po:info'), "feed"); 
	
	elgg_register_widget_type('feed/bfrens_index_tweets', elgg_echo('bf_widgets:tw'), elgg_echo('bf_widgets:tw:info'), "feed");   
	
	elgg_register_widget_type('feed/bfrens_index_thewire', elgg_echo('bf_widgets:twire'), elgg_echo('bf_widgets:twire:info'), "feed");  
        }

}

function bfrens_widgets_page_handler($page) {

$base_lists = elgg_get_plugins_path() . 'bfrens_widgets/pages';

	require "$base_lists/bfrend_widgets.php";
	return true;
}

 
// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_widgets_init');

?>