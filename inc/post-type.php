<?php
/**
 * CARSERVICE custom Post type functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CARSERVICE
 */


function carservice_cpt() {
    //Slider
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'Slider' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'Slider' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'Slider' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'Slider' ),
        'add_new'               => __( 'Add New', 'Slider' ),
        'add_new_item'          => __( 'Add New Slider', 'Slider' ),
        'new_item'              => __( 'New Slider', 'Slider' ),
        'edit_item'             => __( 'Edit Slider', 'Slider' ),
        'view_item'             => __( 'View Slider', 'Slider' ),
        'all_items'             => __( 'All Sliders', 'Slider' ),
        'search_items'          => __( 'Search Sliders', 'Slider' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'Slider' ),
        'not_found'             => __( 'No Sliders found.', 'Slider' ),
        'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'Slider' ),
        'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Slider' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Slider' ),
        'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Slider' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Slider' ),
        'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Slider' ),
        'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Slider' ),
        'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Slider' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Slider custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-slides',
        'menu_position'      => 26,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'slider', $args );

    //Service Featured
    $labels = array(
        'name'                  => _x( 'Service Featured', 'Post type general name', 'Featured' ),
        'singular_name'         => _x( 'Featured', 'Post type singular name', 'Featured' ),
        'menu_name'             => _x( 'Service Featured', 'Admin Menu text', 'Featured' ),
        'name_admin_bar'        => _x( 'Featured', 'Add New on Toolbar', 'Featured' ),
        'add_new'               => __( 'Add New', 'Featured' ),
        'add_new_item'          => __( 'Add New Featured', 'Featured' ),
        'new_item'              => __( 'New Featured', 'Featured' ),
        'edit_item'             => __( 'Edit Featured', 'Featured' ),
        'view_item'             => __( 'View Featured', 'Featured' ),
        'all_items'             => __( 'All Service Featured', 'Featured' ),
        'search_items'          => __( 'Search Service Featured', 'Featured' ),
        'parent_item_colon'     => __( 'Parent Service Featured:', 'Featured' ),
        'not_found'             => __( 'No Service Featured found.', 'Featured' ),
        'not_found_in_trash'    => __( 'No Service Featured found in Trash.', 'Featured' ),
        'featured_image'        => _x( 'Featured Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Featured' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Featured' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Featured' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Featured' ),
        'archives'              => _x( 'Featured archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Featured' ),
        'insert_into_item'      => _x( 'Insert into Featured', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Featured' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Featured', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Featured' ),
        'filter_items_list'     => _x( 'Filter Service Featured list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Featured' ),
        'items_list_navigation' => _x( 'Service Featured list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Featured' ),
        'items_list'            => _x( 'Service Featured list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Featured' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Featured custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'featured' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-clipboard',
        'menu_position'      => 27,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'featured', $args );

    //Members
    $labels = array(
        'name'                  => _x( 'Members', 'Post type general name', 'Member' ),
        'singular_name'         => _x( 'Member', 'Post type singular name', 'Member' ),
        'menu_name'             => _x( 'Members', 'Admin Menu text', 'Member' ),
        'name_admin_bar'        => _x( 'Member', 'Add New on Toolbar', 'Member' ),
        'add_new'               => __( 'Add New', 'Member' ),
        'add_new_item'          => __( 'Write Member Name', 'Member' ),
        'new_item'              => __( 'New Member', 'Member' ),
        'edit_item'             => __( 'Edit Member', 'Member' ),
        'view_item'             => __( 'View Member', 'Member' ),
        'all_items'             => __( 'All Members', 'Member' ),
        'search_items'          => __( 'Search Members', 'Member' ),
        'parent_item_colon'     => __( 'Parent Members:', 'Member' ),
        'not_found'             => __( 'No Members found.', 'Member' ),
        'not_found_in_trash'    => __( 'No Members found in Trash.', 'Member' ),
        'featured_image'        => _x( 'Member Image', 'Overrides the “Member Image” phrase for this post type. Added in 4.3', 'Member' ),
        'set_featured_image'    => _x( 'Set Member Photo', 'Overrides the “Set Member image” phrase for this post type. Added in 4.3', 'Member' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove Member image” phrase for this post type. Added in 4.3', 'Member' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as Member image” phrase for this post type. Added in 4.3', 'Member' ),
        'archives'              => _x( 'Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Member' ),
        'insert_into_item'      => _x( 'Insert into Member', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Member' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Member', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Member' ),
        'filter_items_list'     => _x( 'Filter Members list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Member' ),
        'items_list_navigation' => _x( 'Members list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Member' ),
        'items_list'            => _x( 'Members list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Member' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Member custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'member' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-groups',
        'menu_position'      => 28,
        'supports'           => array( 'title', 'thumbnail' ),
        'show_in_rest'       => true
    );
    
    register_post_type( 'member', $args );

    //Testimonials
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'Testimonial' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'Testimonial' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'Testimonial' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'Testimonial' ),
        'add_new'               => __( 'Add New', 'Testimonial' ),
        'add_new_item'          => __( 'Write Client Name', 'Testimonial' ),
        'new_item'              => __( 'New Testimonial', 'Testimonial' ),
        'edit_item'             => __( 'Edit Testimonial', 'Testimonial' ),
        'view_item'             => __( 'View Testimonial', 'Testimonial' ),
        'all_items'             => __( 'All Testimonials', 'Testimonial' ),
        'search_items'          => __( 'Search Testimonials', 'Testimonial' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'Testimonial' ),
        'not_found'             => __( 'No Testimonials found.', 'Testimonial' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'Testimonial' ),
        'featured_image'        => _x( 'Client Photo', 'Overrides the “Testimonial Image” phrase for this post type. Added in 4.3', 'Testimonial' ),
        'set_featured_image'    => _x( 'Set Client Photo', 'Overrides the “Set Testimonial image” phrase for this post type. Added in 4.3', 'Testimonial' ),
        'remove_featured_image' => _x( 'Remove Client Photo', 'Overrides the “Remove Testimonial image” phrase for this post type. Added in 4.3', 'Testimonial' ),
        'use_featured_image'    => _x( 'Use as Client Photo', 'Overrides the “Use as Testimonial image” phrase for this post type. Added in 4.3', 'Testimonial' ),
        'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Testimonial' ),
        'insert_into_item'      => _x( 'Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Testimonial' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Testimonial' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Testimonial' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Testimonial' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Testimonial' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-testimonial',
        'menu_position'      => 29,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => false
    );
    
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'carservice_cpt' );


