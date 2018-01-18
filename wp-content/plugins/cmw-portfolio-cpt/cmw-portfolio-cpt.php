<?php 
/*
Plugin Name: CMW CustomPostTypes - Knife Gallery
Description: Creates the "Portfolio" Custom Post Type, so we can add portfolio pieces
Author: Colton Wood
Version: 0.1
License: GPLv3
*/

add_action( 'init', 'cmw_register_knife' );
function cmw_register_knife(){
	register_post_type( 'knife', array(
		'public' 		=> true,
		'has_archive' 	=> true,
		'label' 		=> 'Knives',
		'menu_icon'		=> 'dashicons-format-gallery',
		'menu_position'	=> 5,
		'labels'		=> array(
				'add_new_item' 	=> 'Add New Knife',
				'not_found' 	=> 'No Knives Found',
			),
		//for better looking URLs, like site.com/portfolio
		'rewrite'		=> array( 'slug' => 'knives' ),
		'supports'		=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions',
								 'custom-fields' ),
	) );

	//add the "type of work" taxonomy to the portfolio
	register_taxonomy( 'type_of_work', 'knife', array(
		'label' 			=> 'Work Types',
		'show_admin_column' => true,
		'hierarchical' 		=> true,
		'labels'			=> array(
				'add_new_item' 	=> 'Add New Work Type',
				'search_items' 	=> 'Search Work Types',
				'parent_item' 	=> 'Parent Work Type',
			),
	) );
}

function cmw_cpt_flush(){
	cmw_register_knife();
	flush_rewrite_rules();
}
//run the function when this plugin activates
register_activation_hook( __FILE__, 'cmw_cpt_flush' );