<?php
/**
 * Elgg icons
 *
 * @package Elgg.Core
 * @subpackage UI
 */

?>



/* ***************************************
	AVATAR ICONS
*************************************** */
.elgg-avatar {
	position: relative;
	display: inline-block;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 25px;
	-khtml-background-size: 25px;
	-moz-background-size: 25px;
	-o-background-size: 25px;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 40px;
	-khtml-background-size: 40px;
	-moz-background-size: 40px;
	-o-background-size: 40px;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-medium2 > a > img {
	width: 170px;
	height: 170px;
	box-shadow: 0px 0px 0px 4px rgba(0, 0, 0, 0.2);
	background-size:170px 170px;
}
.elgg-avatar-large > a > img {
	width: 200px;
	height: 200px;
}
.elgg-avatar-large2 > a > img {
	width: 200px;
	height: 200px;
	box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
	background-size:200px 200px;
}
.elgg-avatar-medium2{
	
	padding-top:5px;
	padding-bottom:5px;
	padding-right:5px;
	padding-left:5px;
	border: 6px solid #db7fb1;
	box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
	background-color:#ffffff;	
}