<?php
		$owner = $vars['entity']->getOwnerEntity();
		$friendlytime = friendly_time($vars['entity']->time_created);
		$responses = $vars['entity']->countAnnotations('vote');
		//
		$icon = elgg_view(
						"profile/icon", array(
										'entity' => $owner,
										'size' => 'tiny',
									  		)
						);
		$info = "<a href=\"{$vars['entity']->getURL()}\">{$vars['entity']->question}</a><br>";
		$info .= "{$responses} responses<br>";
		$info .= "<p class=\"owner_timestamp\"><a href=\"{$owner->getURL()}\">{$owner->name}</a> {$friendlytime}</p>";
		//echo elgg_view_listing($icon,$info);//elgg_view_listing($icon,$info); elgg_echo($info);
		
		
		$info .= "<div class=\"poll_post\"><div class=\"poll_post_body\"><div class=\"contentWrapper\">";

				$priorVote = polls_check_for_previous_vote($vars['entity'], get_loggedin_userid());				
				//if user has voted, show the results
				if ($priorVote)	{
				
					$info .= "<p>";
					$info .= elgg_echo("polls:voted");
					$info .= "</p>";
					$info .= elgg_view('polls/results', array('entity' => $vars['entity']));
					
				} else {
					
					//else show the form
					$info .= elgg_view('polls/forms/vote', array('entity' => $vars['entity'],'full'=>$vars['full']));
					
				}

		$info .= "</div></div></div>";
		
		
		echo elgg_view('page/components/image_block', array('image' => $icon, 'body' => $info));
?>