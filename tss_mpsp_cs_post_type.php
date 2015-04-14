<?php




/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function tss_mpsp_slider_posts_type() {

	$labels = array(
		'name'                => __( 'Testimonial Sliders', 'text-domain' ),
		'singular_name'       => __( 'Testimonial Slider', 'text-domain' ),
		'add_new'             => _x( 'Add New Testimonial Slider', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Testimonial Slider', 'text-domain' ),
		'edit_item'           => __( 'Edit Testimonial Slider', 'text-domain' ),
		'new_item'            => __( 'New Testimonial Slider', 'text-domain' ),
		'view_item'           => __( 'View Testimonial Slider', 'text-domain' ),
		'search_items'        => __( 'Search Testimonial Sliders', 'text-domain' ),
		'not_found'           => __( 'No Testimonial Sliders found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Testimonial Sliders found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Testimonial Slider:', 'text-domain' ),
		'menu_name'           => __( 'Testimonial Sliders', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports' => array('title','custom_fields')
	);

	register_post_type( 'tss_slider', $args );
}

add_action( 'init', 'tss_mpsp_slider_posts_type' );






 ?>