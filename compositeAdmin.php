<?php

 
function compositeRoofs() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Roofs', 'Post Type General Name', 'flatsome' ),
        'singular_name'       => _x( 'Roof', 'Post Type Singular Name', 'flatsome' ),
        'menu_name'           => __( 'Roofs', 'flatsome' ),
        'parent_item_colon'   => __( 'Parent Roof', 'flatsome' ),
        'all_items'           => __( 'All Roofs', 'flatsome' ),
        'view_item'           => __( 'View Roof', 'flatsome' ),
        'add_new_item'        => __( 'Add New Roof', 'flatsome' ),
        'add_new'             => __( 'Add New', 'flatsome' ),
        'edit_item'           => __( 'Edit Roof', 'flatsome' ),
        'update_item'         => __( 'Update Roof', 'flatsome' ),
        'search_items'        => __( 'Search Roof', 'flatsome' ),
        'not_found'           => __( 'Not Found', 'flatsome' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'flatsome' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'roofs', 'flatsome' ),
        'description'         => __( 'Roofs from clients', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 14,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array( 'category' )
    );
        
    // Registering your Custom Post Type
    unregister_post_type('roofs');
    register_post_type( 'roofs', $args );
    
}
    
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
    
add_action( 'init', 'compositeRoofs', 0 );
 
function customInstall() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Installs', 'Post Type General Name', 'flatsome' ),
        'singular_name'       => _x( 'Install', 'Post Type Singular Name', 'flatsome' ),
        'menu_name'           => __( 'Installs', 'flatsome' ),
        'parent_item_colon'   => __( 'Parent Install', 'flatsome' ),
        'all_items'           => __( 'All Installs', 'flatsome' ),
        'view_item'           => __( 'View Install', 'flatsome' ),
        'add_new_item'        => __( 'Add New Install', 'flatsome' ),
        'add_new'             => __( 'Add New', 'flatsome' ),
        'edit_item'           => __( 'Edit Install', 'flatsome' ),
        'update_item'         => __( 'Update Install', 'flatsome' ),
        'search_items'        => __( 'Search Install', 'flatsome' ),
        'not_found'           => __( 'Not Found', 'flatsome' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'flatsome' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'installs', 'flatsome' ),
        'description'         => __( 'Installs from clients', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array( 'category' )
        );
        
    // Registering your Custom Post Type
    unregister_post_type( 'installs' );
    register_post_type( 'installs', $args );
    
}
    
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
    
add_action( 'init', 'customInstall', 0 );