<?php

if (!$_GET['widget']){
	header("HTTP/1.1 404 Not Found");
	exit;
}
else{


$file="widgets/".$_GET['widget']."/bfrens_content";

$content = elgg_view($file);

echo elgg_view_page("", $content, "shells/blank");



                             
                             
                             
                             
                             
}