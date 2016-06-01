<?php


require_once (dirname(dirname(dirname(__FILE__)))."/jpgraph/jpgraph.php");
require_once (dirname(dirname(dirname(__FILE__)))."/jpgraph/jpgraph_bar.php");



$datay = array($_GET["elimahan"], $_GET["prayogika"], $_GET["vidya"], $_GET["nirmanathamaka"], $_GET["viyaparika"], $_GET["karyaliya"], $_GET["mahajana"]);

$datax = array('Outdoor','Practical','Scientific','Creative', 'Business ', 'karyaliya', 'Personal contact');





 

 
// Size of graph
$width=950;
$height=550;
 
// Set the basic parameters of the graph
$graph = new Graph($width,$height,'auto');
$graph->SetScale('textlin');
 
// Rotate graph 90 degrees and set margin
$graph->Set90AndMargin(120,20,50,30);
 
// Nice shadow
$graph->SetShadow();
 
// Setup title
$graph->title->Set('Yahalu.com Interest Assessment Result');

 
// Setup X-axis
$graph->xaxis->SetTickLabels($datax);

 
// Some extra margin looks nicer
$graph->xaxis->SetLabelMargin(5);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center');
 
// Add some grace to y-axis so the bars doesn't go
// all the way to the end of the plot area
$graph->yaxis->scale->SetGrace(20);
 
// We don't want to display Y-axis

 
// Now create a bar pot
$bplot = new BarPlot($datay);
$bplot->SetFillColor('orange');
$bplot->SetShadow();
 
//You can change the width of the bars if you like
//$bplot->SetWidth(0.5);
 
// We want to display the value of each bar at the top
$bplot->value->Show();

$bplot->value->SetAlign('left','center');
$bplot->value->SetColor('black','darkred');
$bplot->value->SetFormat('%.0f ');
 
// Add the bar to the graph
$graph->Add($bplot);
 
// .. and stroke the graph
$graph->Stroke();
 ?>