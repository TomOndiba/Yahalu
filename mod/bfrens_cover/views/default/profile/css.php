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
.profile {
	float: left;
	margin-bottom: 15px;
}
.profile .elgg-inner {
	margin: 0 5px;
	border: 2px solid #eee;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
#profile-details {
	padding: 15px;
	min-height: 372px;
}
/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	background-color: #eee;
	padding: 15px;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 4px;
	display: table;
}
.profile-content-menu a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-content-menu a:hover {
	background: #0054A7;
	color: white;
	text-decoration: none;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-admin-menu-wrapper {
	background-color: white;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
.profile-admin-menu-wrapper li a {
	background-color: white;
	color: red;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: black;
}
/*** profile details ***/
#profile-details .odd {
	background-color: #f4f4f4;
	
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	margin: 0 0 7px;
	padding: 2px 4px;
}
#profile-details .even {
	background-color:#f4f4f4;
	
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	margin: 0 0 7px;
	padding: 2px 4px;
}
.profile-aboutme-title {
	background-color:#f4f4f4;
	
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	border-radius: 4px;
	
	margin: 0;
	padding: 2px 4px;
}
.profile-aboutme-contents {
	padding: 2px 0 0 3px;
}
.profile-banned-user {
	border: 2px solid red;
	padding: 4px 8px;
	
	-webkit-border-radius: 6px; 
	-moz-border-radius: 6px;
	border-radius: 6px;
}


/*** owner Cover ***/
#profile-owner-cover {
	width: auto;
	padding-top:9px;
	padding-bottom:4px;
	padding-right:9px;
	padding-left:9px;
	z-index:-1;
	position: absolute;
	border: 6px solid #6c96c8;
	box-shadow: 0px 0px 0px 2px rgba(0,0,0,0.2);

}
#profile-owner-cover .large {
	margin-bottom: 10px;
}
#profile-owner-cover a.elgg-button-action {
	margin-bottom: 4px;
	display: table;
}


.elgg-avatar-cover > a > img {
	width: 934px;
	height: 350px;
	box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.2);

}
#profile-owner-cover-profile {
float:left;
	width: auto;
	top=-100px;
	z-index:2;
	position: relative;

	
	padding-top:280px;
	padding-bottom:0px;
	padding-right:0px;
	padding-left:50px;

}
#profile-owner-cover-asasa {
	position: absolute;
	top= 0px;
	width: auto;
	position: relative;
	padding-top:380px;
	padding-bottom:0px;
	padding-right:0px;
	padding-left:10px;
}

.elgg-inner-profile {
margin: 0 5px;
border: 2px solid #6d97c9;
-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;
}
.elgg-river-bfrens{
border-top: 2px solid #6d97c9;
}