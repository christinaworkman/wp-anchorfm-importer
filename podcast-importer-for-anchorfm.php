<?php
/**
* Plugin Name: Podcast Importer for Anchor.Fm
* Plugin URI: https://christinaworkman.ca
* Description: Plugin to import podcast episodes from Anchor.fm.
* Version: 0.1
* Author: Christina Workman
* Author URI: https://christinaworkman.ca
* License: GPLv2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: pod-import-anchorfm
**/

include( plugin_dir_path( __FILE__ ) . 'includes/rss.php' );

function piafm_custom_post_type() {
    register_post_type('anchorfm_episode',
        array(
            'labels'      => array(
                'name' => __( 'Episodes' , 'pod-import-anchorfm' ),
                'singular_name' => __( 'Episode' , 'pod-import-anchorfm' ),
                'add_new' => __( 'New Episode' , 'pod-import-anchorfm' ),
                'add_new_item' => __( 'Add New Episode' , 'pod-import-anchorfm' ),
                'edit_item' => __( 'Edit Episode' , 'pod-import-anchorfm' ),
                'new_item' => __( 'New Episode' , 'pod-import-anchorfm' ),
                'view_item' => __( 'View Episode' , 'pod-import-anchorfm' ),
                'search_items' => __( 'Search Episodes' , 'pod-import-anchorfm' ),
                'not_found' =>  __( 'No Episodes Found' , 'pod-import-anchorfm' ),
                'not_found_in_trash' => __( 'No Episodes found in Trash' , 'pod-import-anchorfm' ),
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
add_action('init', 'piafm_custom_post_type');

require_once( plugin_dir_path( __FILE__ ) . 'includes/utility-functions.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/episode-import.php' );

