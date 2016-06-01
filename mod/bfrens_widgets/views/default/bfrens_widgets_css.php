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
.bf-gallery-widget > li {
	width: 305px;
}
.bf-gallery-widget > li> a > img  {
	width: 290px;
	height: 290px;
}
.bf-gallery-widget > li> a  {
   pointer-events: none;
   cursor: default;
}
.bf-gallery-widget{
	padding-top:2cm;
}
.bfrens-widgt{
	border-style: solid;
	border-width: 5px;
	padding: 5px;
	padding-left:15px;
	padding-right:15px;
	border-radius:15px;
	
	position: relative;
	display: inline-block;
	
	
}
.bfrens-widgt-header{
	opacity:0.5;
	height: 50px;
	background-color:rgb( 130, 170, 198);
	border:1px solid rgb( 130, 170, 198);
	padding: 3px;
	margin-left: -15px;
	margin-right: -15px;
	margin-bottom: 15px;
	margin-top: -5px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
	
}
.bfrens-widgt-red{
	opacity:0.9;
	border-color: rgb( 255, 195, 177);
}
.bfrens-widgt-fullbutn{
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/bfrens_widgets/graphics/fullscreen.png) no-repeat left;
	width: 25px;
	height: 25px;
	
	
	position: relative;
	display: inline-block;
}
.bfrens-widgt-header-titel{
	font-size:25px;
	font-family: "Arial Rounded MT", Arial, Helvetica, sans-serif;
	font-weight:400;
	margin:15px 20px auto;
	color: rgb(0, 0, 80);
}
.bf-photo-widget {
	margin-right:5px;
	margin-left:5px;
}
.bf-photo-widget > a > img  {
	width: 280px;
	height: 280px;
}
.bf-photo-new-widget > a > img  {
	width: 350px;
	overflow: visible;
	
}
.bf-photo-feed-widget > a > img  {
	width: 260px;
}
.bf-margin{
	margin: 0px auto 0px;
}
.bf-widgets-add-btn{
 margin: auto auto 10px;
 
 }
.addbtn-fix{
 position:relative;
 height: 20px;
 margin:10px 0px 20px 0px;
 }
 
.bf-widgets-video{
 margin: auto auto 10px;
}