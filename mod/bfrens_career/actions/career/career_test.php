<?php

elgg_make_sticky_form('career_test');
 




$max= get_input('max');
$maxmid= get_input('maxmid');

$qu = array();
$qc = array();

// for example
for ($i = 1; $i <= $max; $i++) {
$name="QJ".$i;

    $val = get_input($name);

    if ($val=="no"){
    register_error(elgg_echo("career:test:answers:answer:blank"));
    forward(REFERRER);
    }

    $qu[]= array($name => get_input($name));
    $temp = array($name => get_input($name));
    array_push($qc, $temp );
}

$r=0;



if (!$max) {
	register_error(elgg_echo("career:test:answers:answer:blank"));
	forward(REFERRER);

}else{

	$question = new ElggObject();
	$question->subtype = "career_test";
	$question->access_id = ACCESS_PUBLIC;
	foreach ($qu as $v1) {
    		foreach ($v1 as $key=> $value) {
        	$question->$key = $value;
   			 }
		}
	
	if (!$question->save()) {
		register_error(elgg_echo("career:test:answers:save:failure"));
		forward(REFERRER);
	}
	
	
	// add to river
	//add_to_river('river/object/question/create', 'create', $_SESSION['user']->guid, $question->guid);

	$a=0;	$elimahan=0; $prayogika=0; $vidya=0; $nirmanathamaka=0; $viyaparika=0; $karyaliya=0; $mahajana=0;
	
	foreach ($qu as $v1) {
	
	$a++;
    		foreach ($v1 as $key=> $value) {
    		
    		$r=1;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=2;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$vidya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=3;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$nirmanathamaka += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$vidya += 1;
        	}
    		
    		$r=4;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$mahajana += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$nirmanathamaka += 1;
        	}
    		
    		$r=5;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$karyaliya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$viyaparika += 1;
        	}
    		
    		$r=6;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$viyaparika += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$mahajana += 1;
        	}
    		
    		$r=7;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$vidya += 1;
        	}
    		
    		$r=8;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$nirmanathamaka += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=9;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$mahajana += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$vidya += 1;
        	}
    		
    		$r=10;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$mahajana += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$nirmanathamaka += 1;
        	}
    		
    		$r=11;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=12;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$nirmanathamaka += 1;
        	}
    		
    		$r=13;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$viyaparika += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=14;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$viyaparika += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$vidya += 1;
        	}
    		
    		$r=15;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$karyaliya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$nirmanathamaka += 1;
        	}
    		
    		$r=16;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$mahajana += 1;
        	}
    		
    		$r=17;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$karyaliya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$prayogika += 1;
        	}
    		
    		$r=18;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$karyaliya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$vidya += 1;
        	}
    		
    		$r=19;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$viyaparika += 1;
        	}
    		
    		$r=20;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$karyaliya += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$mahajana += 1;
        	}
    		
    		$r=21;
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="A" ){
        	$elimahan += 1;
        	}
        	if(($a==$r or $a==($r+$maxmid) or $a==($r+($maxmid*2))) and $value=="B" ){
        	$karyaliya += 1;
        	}
        	
        	
   			 }
		}
		
			$question_rst = new ElggObject();
			$question_rst->subtype = "career_test_result";
			$question_rst->access_id = ACCESS_PUBLIC;
			
			$question_rst->elimahan = $elimahan;
			$question_rst->prayogika = $prayogika;
			$question_rst->vidya = $vidya;
			$question_rst->nirmanathamaka = $nirmanathamaka;
			$question_rst->viyaparika = $viyaparika;
			$question_rst->karyaliya = $karyaliya;
			$question_rst->mahajana = $mahajana;
			
	
	if (!$question_rst->save()) {
		register_error(elgg_echo("career:test:answers:save:failure"));
		forward(REFERRER);
	}


system_message(elgg_echo("career:test:answers:answer:posted"));

forward($question_rst->getURL());
}