<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>

/* ***************************************
	Profile
*************************************** */

.elgg-page-body2{
	max-height: 600px;
}
.elgg-page-font{
	min-width: 1024px;
}

.elgg-page-font .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	margin-top:30px;
}
.elgg-page-font .elgg-page-upindex > .elgg-inner {
	width: 100%;
	margin: 0 auto;
	padding: 10px 15px;
	border-top: 0px solid #DEDEDE;
}

.elgg-page-upindex {
        width: 100%;
	position:fixed;
	top:10px;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bfrens_index/graphics/fb_top_udin.png);
	background-size: 100% 100%;
	background-color: #3c5a7d;
  	height: 55px;
  	border-top:    1px solid #3c5a7d;
	border-bottom: 1px solid #3c5a7d;
	box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.3); 
	z-index: 2;  
	
}
.elgg-page-upindex a {
	color: #888;
  text-decoration: none;
}
.elgg-page-upindex a:hover {
	color: #eee;
}

.elgg-page-dwindex {
        width: 100%;
	position:relative;
	bottom:10px;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bfrens_index/graphics/fb_top_udin.png);
	background-size: 100% 100%;
	background-color: #3c5a7d;
	text-shadow: 0px 1px 1px #000;
  	height: 55px;
  	border-top:    1px solid #777777;
	border-bottom: 1px solid #777777;
	box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.2);  
	z-index: 2;  
}
.elgg-page-dwindex a {
	color: #888;
 	text-decoration: none;
}
.elgg-page-dwindex a:hover {
	color: #eee;
}

.elgg-page-rights {
        width: 100%;
	margin-bottom:25px;
  	height: 30px;
}
.elgg-page-rights-site {
        width: 100%;
        position:fixed;
        bottom: 0px;
	margin-bottom:75px;
  	height: 30px;
  	z-index: 3; 
}
.elgg-page-font .elgg-page-logo > .elgg-inner {
	margin-top:60px;
}
.elgg-page-site{
	position:absolute;
	min-width: 1024px;
        height: 100%;
       	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/sidebar.png) repeat-y right top;
}
.elgg-page-site-rights{
	opacity:0.8;
	font-size: 12px;
	font-weight: normal;
	font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
}
.tidypics-gallery-widget2 > li {
	width: 300px;
}

/***** TOPBAR ******/
.elgg-page-topbar-new {

	position: relative;
	z-index: 9000;
}
.elgg-page-topbar-new > .elgg-inner {
  padding: 8px 0px 6px 0px;
  width: 95%;
  margin: auto;
  height: 35px;
}
.bf-index-topic{

font-size: 35px;
font-weight: bold;
font-family: Arial,Helvetica,sans-serif;
margin-top: 10px;
color: rgb(110, 150, 180);
line-height: 100%;

}