<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>

.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:13px;
	-webkit-border-bottom-left-radius:13px;
	border-bottom-left-radius:13px;
	
	-moz-border-radius-bottomright:13px;
	-webkit-border-bottom-right-radius:13px;
	border-bottom-right-radius:13px;
	
	-moz-border-radius-topright:13px;
	-webkit-border-top-right-radius:13px;
	border-top-right-radius:13px;
	
	-moz-border-radius-topleft:13px;
	-webkit-border-top-left-radius:13px;
	border-top-left-radius:13px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child th:last-child {
	-moz-border-radius-bottomright:13px;
	-webkit-border-bottom-right-radius:13px;
	border-bottom-right-radius:13px;
}
.CSSTableGenerator table tr:first-child th:first-child {
	-moz-border-radius-topleft:13px;
	-webkit-border-top-left-radius:13px;
	border-top-left-radius:13px;
}
.CSSTableGenerator table tr:first-child th:last-child {
	-moz-border-radius-topright:13px;
	-webkit-border-top-right-radius:13px;
	border-top-right-radius:13px;
}.CSSTableGenerator tr:last-child th:first-child{
	-moz-border-radius-bottomleft:13px;
	-webkit-border-bottom-left-radius:13px;
	border-bottom-left-radius:13px;
}.CSSTableGenerator tr:hover th{
	background-color:#ffffff;
		

}
.CSSTableGenerator td{
	vertical-align:middle;
	
	background-color:#aad4ff;

	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:9px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator th{
		background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator th:hover th{
	background:-o-linear-gradient(bottom, #005fbf 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #005fbf 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#003f7f");	background: -o-linear-gradient(top,#005fbf,003f7f);

	background-color:#005fbf;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}