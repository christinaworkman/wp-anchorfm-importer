<?php
/**
* Plugin Name: WP Anchor.fm Importer
* Plugin URI: https://christinaworkman.ca
* Description: Plugin to import podcast episodes from Anchor.fm.
* Version: 0.1
* Author: Christina Workman
* Author URI: https://christinaworkman.ca
* License: GPLv2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: wp-anchorfm-importer
**/

include( plugin_dir_path( __FILE__ ) . 'includes/rss.php' );

function wpafmi_custom_post_type() {
    register_post_type('anchorfm_episode',
        array(
            'labels'      => array(
                'name' => __( 'Episodes' , 'wp-anchorfm-importer' ),
                'singular_name' => __( 'Episode' , 'wp-anchorfm-importer' ),
                'add_new' => __( 'New Episode' , 'wp-anchorfm-importer' ),
                'add_new_item' => __( 'Add New Episode' , 'wp-anchorfm-importer' ),
                'edit_item' => __( 'Edit Episode' , 'wp-anchorfm-importer' ),
                'new_item' => __( 'New Episode' , 'wp-anchorfm-importer' ),
                'view_item' => __( 'View Episode' , 'wp-anchorfm-importer' ),
                'search_items' => __( 'Search Episodes' , 'wp-anchorfm-importer' ),
                'not_found' =>  __( 'No Episodes Found' , 'wp-anchorfm-importer' ),
                'not_found_in_trash' => __( 'No Episodes found in Trash' , 'wp-anchorfm-importer' ),
                    ),
                'public'      => true,
                'has_archive' => true,
                'hierarchical' => false,
                'supports' => array(
                    'title', 
                    'editor', 
                    'excerpt', 
                    'custom-fields', 
                    'thumbnail',
                    'page-attributes'
                ),
                'rewrite'   => array( 'slug' => 'Episodes' ),
                'show_in_rest' => true
               )
    );
}
add_action('init', 'wpafmi_custom_post_type');