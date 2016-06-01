<?php
if (isset($vars['entity'])) {
	$answer = $vars['entity'];
	}

echo elgg_echo('career:test');
?>
<table style="width:100%" border="1">
<tr>
  <th></td>
  <th colspan="2"><?php echo elgg_echo('career:test:quotation:one:chapter:one:category'); ?></th> 
</tr><tr> <th></th>
  <th><?php echo elgg_echo('career:test:quotation:a'); ?></th> 
  <th><?php echo elgg_echo('career:test:quotation:b'); ?></th>
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
    <td><?php echo $answer->$name;
	?></td>

</tr>
<?php
	}
?>
</table>