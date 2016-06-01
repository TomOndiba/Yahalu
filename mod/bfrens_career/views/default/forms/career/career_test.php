<?php

if (elgg_is_sticky_form('career_test')) {
	extract(elgg_get_sticky_values('career_test'));
	elgg_clear_sticky_form('career_test');
}

echo elgg_echo('career:test:quotation:guide:one:chapter');

?>
<table class="CSSTableGenerator">
<tr>

  <th colspan="4"><?php echo elgg_echo('career:test:quotation:one:chapter:one:category'); ?></th> 
</tr><tr> <th></th>
  <th><?php echo elgg_echo('career:test:quotation:a'); ?></th><th> <?php echo elgg_echo('career:test:quotation:b'); ?></th>
  <th></th>
</tr>
<?php
	$max=21;
	for($i=1; $i<=$max; $i++){
	$name="QJ".$i;
	$aname="AQJ".$i;
	$bname="BQJ".$i;
	$anamedis="career:test:quotation:AQJ".$i;
	$bnamedis="career:test:quotation:BQJ".$i;
?>
<tr>
  <td><?php echo $i; ?></td>
  <td><label><?php echo elgg_echo($anamedis); ?></label></td>
  <td><label><?php echo elgg_echo($bnamedis); ?></label></td>
    <td><?php echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'class' => 'elgg-autofocus',
		'options' => array('A' => 'A', 'B' => 'B'),
		));
	echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'options' => array('' => 'no'),
		'value' => 'no',
		'style' =>  'display:none;',
		));
	?></td>

</tr>
<?php
	}
?>

<!-- ******************************* -->

<tr>
 
  <th colspan="4"><?php echo elgg_echo('career:test:quotation:one:chapter:two:category'); ?></th> 
</tr>
<?php
	
	for($i=22; $i<=42; $i++){
	$name="QJ".$i;
	$aname="AQJ".$i;
	$bname="BQJ".$i;
	$anamedis="career:test:quotation:AQJ".$i;
	$bnamedis="career:test:quotation:BQJ".$i;
?>
<tr>
  <td><?php echo $i; ?></td>
  <td><label><?php echo elgg_echo($anamedis); ?></label></td>
  <td><label><?php echo elgg_echo($bnamedis); ?></label></td>
    <td><?php echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'class' => 'elgg-autofocus',
		'options' => array('A' => 'A', 'B' => 'B'),
		));
			echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'options' => array('' => 'no'),
		'value' => 'no',
		'style' =>  'display:none;',
		));
	?></td>

</tr>
<?php
	}
?>

<!-- ******************************* -->


<tr>

  <th colspan="4"><?php echo elgg_echo('career:test:quotation:one:chapter:three:category'); ?></th> 
</tr>
<?php
	
	for($i=43; $i<=63; $i++){
	$name="QJ".$i;
	$aname="AQJ".$i;
	$bname="BQJ".$i;
	$anamedis="career:test:quotation:AQJ".$i;
	$bnamedis="career:test:quotation:BQJ".$i;
?>
<tr>
  <td><?php echo $i; ?></td>
  <td><label><?php echo elgg_echo($anamedis); ?></label></td>
  <td><label><?php echo elgg_echo($bnamedis); ?></label></td>
    <td><?php echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'class' => 'elgg-autofocus',
		'options' => array('A' => 'A', 'B' => 'B'),
		));
			echo elgg_view('input/radio', array(
		'name' =>  $name ,
		'align' => 'horizontal',
		'options' => array('' => 'no'),
		'value' => 'no',
		'style' =>  'display:none;',
		));
	?></td>

</tr>
<?php
	}
?>

</table>
<div style="margin : 25px;" align="center" class="elgg-foot">
<?php
	echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['entity']->guid));
	echo elgg_view('input/hidden', array('name' => 'max', 'value' => '63'));
	echo elgg_view('input/hidden', array('name' => 'maxmid', 'value' => '21'));
	echo elgg_view('input/submit', array('value' => elgg_echo('save')));
?>
</div>