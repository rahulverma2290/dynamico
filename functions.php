<?php


/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'dynamico_child' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'dynamico_child' ),
        'menu_name'           => __( 'Sliders', 'dynamico_child' ),
        'parent_item_colon'   => __( 'Parent Slider', 'dynamico_child' ),
        'all_items'           => __( 'All Slider', 'dynamico_child' ),
        'view_item'           => __( 'View Slider', 'dynamico_child' ),
        'add_new_item'        => __( 'Add New Slider', 'dynamico_child' ),
        'add_new'             => __( 'Add New', 'dynamico_child' ),
        'edit_item'           => __( 'Edit Slider', 'dynamico_child' ),
        'update_item'         => __( 'Update Slider', 'dynamico_child' ),
        'search_items'        => __( 'Search Slider', 'dynamico_child' ),
        'not_found'           => __( 'Not Found', 'dynamico_child' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dynamico_child' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'sliders', 'dynamico_child' ),
        'description'         => __( 'Slider news and reviews', 'dynamico_child' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'slideTax' ),
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
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'sliders', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

/* Custom Taxonomoies */

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

/* Custom Taxonomoies */

function themes_taxonomy() {  
    register_taxonomy(  
        'slides',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
         array('sliders'),      //post type name
        array(
            'hierarchical' => true,
            'label' => 'Slides Tax',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'slides', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before
            )
        )
    );
}

add_action( 'init', 'themes_taxonomy');


/*
* Creating a function to create our CPT Properties
*/

function custom_post_type_properties() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Properties', 'Post Type General Name', 'dynamico_child' ),
        'singular_name'       => _x( 'Property', 'Post Type Singular Name', 'dynamico_child' ),
        'menu_name'           => __( 'Properties', 'dynamico_child' ),
        'parent_item_colon'   => __( 'Parent Property', 'dynamico_child' ),
        'all_items'           => __( 'All Property', 'dynamico_child' ),
        'view_item'           => __( 'View Property', 'dynamico_child' ),
        'add_new_item'        => __( 'Add New Property', 'dynamico_child' ),
        'add_new'             => __( 'Add New', 'dynamico_child' ),
        'edit_item'           => __( 'Edit Property', 'dynamico_child' ),
        'update_item'         => __( 'Update Property', 'dynamico_child' ),
        'search_items'        => __( 'Search Property', 'dynamico_child' ),
        'not_found'           => __( 'Not Found', 'dynamico_child' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'dynamico_child' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'properties', 'dynamico_child' ),
        'description'         => __( 'Property news and reviews', 'dynamico_child' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'properties' ),
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
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'properties', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

/* Custom Taxonomoies */

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type_properties', 0 );

/* Custom Taxonomoies */

function custom_taxonomy() {  
    register_taxonomy(  
        'property_tax',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
         array('properties'),      //post type name
        array(
            'hierarchical' => true,
            'label' => 'Property Tax',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'property_slug', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before
            )
        )
    );
}

add_action( 'init', 'custom_taxonomy');

/* Create Custom Sidebar */

add_action( 'widgets_init', 'dynamico_child_widgets_init' );

function dynamico_child_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer 3', 'dynamico_child_widgets_init' ),
        'id' => 'sidebar-4',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'dynamico_child_widgets_init' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}

?>
