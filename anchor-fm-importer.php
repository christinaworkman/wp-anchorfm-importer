<?php
/**
* Plugin Name: Anchor.fm Importer
* Plugin URI: https://christinaworkman.ca
* Description: Plugin to import podcast episodes from Anchor.fm.
* Version: 0.1
* Author: Christina Workman
* Author URI: https://christinaworkman.ca
* License: GPLv2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: anchor-fm-importer
**/

function anchor_fm_importer_custom_post_type() {
    register_post_type('anchorfm_episode',
        array(
            'labels'      => array(
                'name' => __( 'Episodes' , 'anchor-fm-importer' ),
                'singular_name' => __( 'Episode' , 'anchor-fm-importer' ),
                'add_new' => __( 'New Episode' , 'anchor-fm-importer' ),
                'add_new_item' => __( 'Add New Episode' , 'anchor-fm-importer' ),
                'edit_item' => __( 'Edit Episode' , 'anchor-fm-importer' ),
                'new_item' => __( 'New Episode' , 'anchor-fm-importer' ),
                'view_item' => __( 'View Episode' , 'anchor-fm-importer' ),
                'search_items' => __( 'Search Episodes' , 'anchor-fm-importer' ),
                'not_found' =>  __( 'No Episodes Found' , 'anchor-fm-importer' ),
                'not_found_in_trash' => __( 'No Episodes found in Trash' , 'anchor-fm-importer' ),
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
add_action('init', 'anchor_fm_importer_custom_post_type');