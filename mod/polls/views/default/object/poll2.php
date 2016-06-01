<?php

/**
 * Elgg poll individual post view
 *  
 * @package Elggpoll_extended
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author John Mellberg <big_lizard_clyde@hotmail.com>
 * @copyright John Mellberg - 2009
 *
 * @uses $vars['entity'] Optionally, the poll post to view
*/

	if (isset($vars['entity'])) {
			
		if (get_context() == "groups") {
			echo elgg_view("polls/listing",$vars);
		}
		
		if (get_context() == "search") {
				
			//display the correct layout depending on gallery or list view
			if (get_input('search_viewtype') == "gallery") {

				//display the gallery view
            	echo elgg_view("polls/gallery",$vars);

			} else {
				
				echo elgg_view("polls/listing",$vars);

			}

		} else {
			
	?>
		<!-- patches by webgalli -->
	<div class="contentWrapper singleview">
		<div class="poll_edit_link">
				<!-- display edit options if it is the poll post owner -->
		<?php
		if ($vars['entity']->canEdit()) {
		?>
			<a href="<?php echo $vars['url']; ?>polls/edit/<?php echo $vars['entity']->getGUID(); ?>"><?php echo elgg_echo("edit"); ?></a>
			<?php
					
					echo elgg_view("output/confirmlink", array(
									'href' => $vars['url'] . "action/polls/delete?pollpost=" . $vars['entity']->getGUID(),
									'text' => elgg_echo('delete'),
									'confirm' => elgg_echo('deleteconfirm'),
									));
	
					// Allow the menu to be extended
					echo elgg_view("editmenu",array('entity' => $vars['entity']));
					
				}
			
			?>
		</div>      
<div class="poll_post">
		<h3><a href="<?php echo $url; ?>"><?php echo $vars['entity']->title; ?></a></h3>      
               <div class="poll_post_icon">
				<?php					
					echo elgg_view("profile/icon",array('entity' => $vars['entity']->getOwnerEntity(), 'size' => 'medium'));
				?>
			</div>

 </div>
<p class="strapline">
				<?php echo sprintf(elgg_echo("polls:strapline"), date("F j, Y",$vars['entity']->time_created)); ?>
				<?php echo elgg_echo('by'); ?> <a href="<?php echo $vars['url']; ?>pg/ad/<?php echo $vars['entity']->getOwnerEntity()->username; ?>"><?php echo $vars['entity']->getOwnerEntity()->name; ?></a> 
				<!-- display the comments link -->
				<?php
			    //get the number of responses
				$num_responses = $vars['entity']->countAnnotations('vote');
				//get the number of comments
         			$num_comments = $vars['entity']->countComments();
			    ?>
			    <?php echo "(" . $num_responses . " " . sprintf(elgg_echo('polls:votes')) . ")"; ?> 
			<a href="<?php echo $vars['entity']->getURL(); ?>"><?php echo sprintf(elgg_echo("comments")) . " (" . $num_comments . ")"; ?></a><BR>		
			</p>
<?php
	
					$tags = elgg_view('output/tags', array('tags' => $vars['entity']->tags));
					if (!empty($tags)) {
						echo '<p class="tags">' . $tags . '</p>';
					} else {
						echo '<p>&nbsp;</p>';
					}
				?>
	<?php
}
}
?>