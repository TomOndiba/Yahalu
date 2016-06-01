<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */

.elgg-page-bfrens-menu {
	min-width: 990px;
}
.elgg-page-bfrens-menu .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	margin-top:10px;
}
.elgg-page-bfrens-menu .elgg-page-header-new{
	background-color: #dadbe6;
}
.elgg-page-bfrens-menu .elgg-page-header-new > .elgg-inner {
	width: 990px;
	height: 100%;
	margin: 0 auto;
	margin-top:67px;

}
.elgg-page-bfrens-menu .elgg-page-dwindex-bf-menu > .elgg-inner {
	width: 990px;
	margin: 9px auto;

}


/* ***************************************
	ICONS
*************************************** */
.elgg-menu-topbar .bfrens-menu-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.bfrens-menu-icon {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bfrens_menu/graphics/sprites.png) no-repeat left;
	width: 40px;
	height: 40px;
	
	margin: 0 2px;
	z-index:-1;
}

.bfrens-menu-icon-home {
	background-position: 0 -0px;
}
.bfrens-menu-icon-mail {
	background-position: 0 -40px;
}
.bfrens-menu-icon-global {
	background-position: 0 -80px;
}
.bfrens-menu-icon-users {
	background-position: 0 -120px;
}
.bfrens-menu-icon-info {
	background-position: 0 -160px;
}
.bfrens-menu-icon-spam {
	background-position: 0 -200px;
}
.bfrens-menu-icon-logout {
	background-position: 0 -240px;
}
.bfrens-menu-icon-cloud {
	background-position: 0 -280px;
}
.bfrens-menu-icon-setting {
	background-position: 0 -320px;
}
.bfrens-menu-icon-wrench {
	background-position: 0 -360px;
}
.bfrens-menu-icon-photo {
	background-position: 0 -400px;
}
.bfrens-menu-icon-calander {
	background-position: 0 -440px;
}
.bfrens-menu-icon-bell {
	background-position: 0 -480px;
}
.bfrens-menu-icon-cammera {
	background-position: 0 -520px;
}
.bfrens-menu-icon-request {
	background-position: 0 -560px;
}

.bfrens-menu-icon-profile{
border:1px solid #ffffff;
border-radius:7px;
}


/* ***************************************
	Profile
*************************************** */


.elgg-page-upindex-bravo {
	z-index: 8999;
        width: 100%;
	position: fixed;
	top:10px;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bfrens_index/graphics/fb_top_udin.png);
	background-size: 100% 100%;
	background-color: #3c5a7d;
  	height: 55px;
  	border-top:    1px solid #5b646d;
	border-bottom: 1px solid #5b646d;
	box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.3); 
	margin-bottom:15px; 
	
}
.elgg-page-dwindex-bf-menu {
        width: 100%;

	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bfrens_index/graphics/fb_top_udin.png);
	background-size: 100% 100%;
	background-color: #3c5a7d;
	text-shadow: 0px 1px 1px #000;
  	height: 55px;
  	border-top:    1px solid #777777;
	border-bottom: 1px solid #777777;
	box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.2);  
	z-index: 5;  
}
/* ***************************************
	SITE MENU
*************************************** */

.elgg-menu-site-bfrens-menu {
	position: relative;
	height: 35px;
}	
.elgg-menu-site-bfrens-menu > .elgg-state-selected > a,
.elgg-menu-site-bfrens-menu > li:hover > a,
.elgg-menu-site-bfrens-menu {
	-moz-border-radius-topleft: 5px;
  	-moz-border-radius-topright: 5px;
  	-moz-border-radius-bottomleft: 5px;
 	-moz-border-radius-bottomright: 5px;
 	 
 	 
 	-webkit-border-top-left-radius: 5px;
  	-webkit-border-top-right-radius: 5px;
 	-webkit-border-bottom-left-radius: 5px;
  	-webkit-border-bottom-right-radius: 5px;

  	border-top-left-radius: 5px;
  	border-top-right-radius: 5px;
  	border-bottom-left-radius: 5px;
  	border-bottom-right-radius: 5px;
  	
  	-webkit-border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	border-radius: 5px 5px 5px 5px;
}
.elgg-menu-site-bfrens-menu > li {
	float: left;
	margin-right: 1px;
}

.elgg-menu-site-bfrens-menu > li:last-child {
	margin-right: 0;
}

.elgg-menu-site-bfrens-menu > li > a {
	color: #fff;
	text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
}
.elgg-menu-site-bfrens-menu > .elgg-state-selected > a,
.elgg-menu-site-bfrens-menu > li:hover > a {
	background: #fff url(<?php echo elgg_get_site_url(); ?>mod/bright-theme/graphics/menu-button.png) repeat-x left top;
	color: #05d;

  border-color: #fff;

	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;

	text-shadow: none;
}
/* ***************************************
	HEADER MENU
*************************************** */
.elgg-propic-site {
	width: 200px;
	height: 200px;
	border:6px solid #db7fb1;
	margin-top:5px;
	margin-bottom:5px;
	padding:4px;
	background-color:#ffffff;
	box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
}
.elgg-propic-site > .elgg-avatar-large2 {
box-shadow: 0px 0px 0px 4px rgba(0,0,0,0.2);
  	
	
}
.elgg-propic-button{
	margin-top:80px;
	margin-left: 150px;
}
elgg-propic-logohead{
	margin-left: 400px;
	margin-right: auto;
}
.elgg-propic-button > ul > li {
float: left;
position: relative;
margin-top:5px;
margin-left:5px;
}

.elgg-propic-logo {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bfrens_menu/graphics/unnamed.png) no-repeat left;
	width: 350px;
	height: 140px;
	background-size:400px 150px;
}

.elgg-propic-name{
	margin-left:260px;
	font-size: 25px;
	font-weight: bold;
	font-family: "Arial Rounded MT",Arial,Helvetica,sans-serif;
	margin-top: 10px;
	color: #23429b;
	line-height:100%;
	
}
.bfrens_heder{
width: 100%;
}
.userpoints_profile_bfrens {
font-weight: bold;
padding: 10px 0 10px 5px;

}
.elgg-page-footer-bfrens{
        width: 100%;

	background-image: url(<?php echo elgg_get_site_url(); ?>mod/bfrens_index/graphics/fb_top_udin.png);
	background-size: 100% 100%;
	background-color: #3a5a7d;
	text-shadow: 0px 1px 1px #000;
  	height: 55px;
  	border-top:    1px solid #777777;
	border-bottom: 1px solid #777777;
	box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.2);  
	z-index: 5;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages-bfrens-menu {
	position: fixed;
	top: 85px;
	right: 20px;
	max-width: 500px;
	z-index: 9001;
}
.elgg-system-messages-bfrens-menu li {
	margin-top: 10px;
}
.elgg-system-messages-bfrens-menu li p {
	margin: 0;
}

.elgg-button-bfrens-logo,
.elgg-button-bfrens-logo:hover {
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	width: auto;
	cursor: pointer;
	outline: none;
  	text-decoration: none;
	
	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);

  	color: #222;
  	border: 1px solid #888;
	position: relative;
	display: inline-block;

}

.elgg-button-bfrens-logo:hover {
  	border-color: #666;
	background-color: #ddd;
}


.elgg-button-bfrens-icon,
.elgg-button-bfrens-icon:hover {
	height:52px;
	width:52px;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bfrens_menu/graphics/sprites_logo.png) no-repeat left;
	
}

.bfrens-icon-newsfeed,
.bfrens-icon-newsfeed:hover{
	background-position: 0 -0px;
}
.bfrens-icon-magazine,
.bfrens-icon-magazine:hover{
	background-position: 0 -52px;
}
.bfrens-icon-blog,
.bfrens-icon-blog:hover{
	background-position: 0 -104px;
}
.bfrens-icon-chat,
.bfrens-icon-chat:hover{
	background-position: 0 -156px;
}
.bfrens-icon-cup,
.bfrens-icon-cup:hover{
	background-position: 0 -208px;
}
.bfrens-icon-bulb,
.bfrens-icon-bulb:hover{
	background-position: 0 -260px;
}

/**********************************
Search plugin
***********************************/
.elgg-search-bfrens-down-midele {
	position:relative;
	z-index: 2;
	margin-top:-30px;
	margin-right:20px;
}

.h2 {
	font-size: 15px;

}
