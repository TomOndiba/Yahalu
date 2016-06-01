<?php
/**
 * Members sidebar
 */
$base = elgg_get_site_url() . 'site/';

        elgg_register_menu_item('page', array('name' => 'bfrens_index:about',
                                              'text' => elgg_echo('bf_index:about'),
                                              'href' => $base . 'about'));

        elgg_register_menu_item('page', array('name' => 'bf_index:team',
                                              'text' => elgg_echo('bf_index:team'),
                                              'href' => $base . 'team'));

        elgg_register_menu_item('page', array('name' => 'bf_index:job',
                                              'text' => elgg_echo('bf_index:job'),
                                              'href' => $base . 'job'));

        elgg_register_menu_item('page', array('name' => 'bf_index:leagal',
                                              'text' => elgg_echo('bf_index:leagal'),
                                              'href' => $base . 'leagal'));

        elgg_register_menu_item('page', array('name' => 'bf_index:community',
                                              'text' => elgg_echo('bf_index:community'),
                                              'href' => $base . 'community'));

        elgg_register_menu_item('page', array('name' => 'bf_index:help',
                                              'text' => elgg_echo('bf_index:help'),
                                              'href' => $base . 'help'));

        elgg_register_menu_item('page', array('name' => 'bf_index:contact',
                                              'text' => elgg_echo('bf_index:contact'),
                                              'href' => $base . 'contact'));
                                              