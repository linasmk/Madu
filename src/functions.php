<?php
// Importing database.php file (contains SQL structure)
require get_template_directory() . '/includes/database.php';

// Handles submited reservations to the database
require get_template_directory() . '/includes/reservations.php';

// Creates option pages for the theme
require get_template_directory() . '/includes/options.php';


// Addomg post-thumbnails to the admin panel
function madu__setup() {
	add_theme_support('post-thumbnails');

	add_image_size('split-images', 700, 550, true);
	add_image_size('specialties', 300, 201, true);

	add_image_size('specialty_item', 250, 320, true);

	// update_option('thumbnail_size_w', 75);
	// update_option('thumbnail_size_h', 75);
}
add_action('after_setup_theme', 'madu__setup');

// Adding styles
function madu__styles() {
	//Adding CSS stylesheets
	wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Bungee+Inline|Jacques+Francois+Shadow|Noto+Serif+JP:400,600,700,900|Vollkorn+SC:400,600,700', array(), '1.0.0');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', array(), '5.7.2');
	wp_register_style('fluidboxcss', 'https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css', array(), '2.0.5');
	wp_register_style('fluidboxcssmap', 'https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css.map', array(), '2.0.5');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

	//Enqueuing stylesheets
	wp_enqueue_style('googlefont');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('fluidboxcss');
	wp_enqueue_style('fluidboxcssmap');
	wp_enqueue_style('style');

	//Adding js scripts
	wp_register_script('fluidboxjs', 'https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js', array('jquery'), '2.0.5', true);
	wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBz02VRxO_dgaKsCS62TLL4AW4McNKQiKU&callback=initMap', array(''), '', true);
	wp_register_script('script', get_template_directory_uri() . "/js/main.min.js", array('jquery'), '1.0.0', true);
	
	//Enqueuing scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('fluidboxjs');
	wp_enqueue_script('googlemaps');
	wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'madu__styles');


// Adding menus
function madu__menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu', 'madu'),
			'social-menu' => __('Social Menu', 'madu')
		));
}
add_action('init', 'madu__menus');

/* Creating Custom Post Types */
function madu_specialties() {
	$labels = array(
		'name'               => _x( 'Meals', 'madu' ),
		'singular_name'      => _x( 'Meal', 'post type singular name', 'madu' ),
		'menu_name'          => _x( 'Meals', 'admin menu', 'madu' ),
		'name_admin_bar'     => _x( 'Meals', 'add new on admin bar', 'madu' ),
		'add_new'            => _x( 'Add New', 'book', 'madu' ),
		'add_new_item'       => __( 'Add New Pizza', 'madu' ),
		'new_item'           => __( 'New Meals', 'madu' ),
		'edit_item'          => __( 'Edit Meals', 'madu' ),
		'view_item'          => __( 'View Meals', 'madu' ),
		'all_items'          => __( 'All Meals', 'madu' ),
		'search_items'       => __( 'Search Meals', 'madu' ),
		'parent_item_colon'  => __( 'Parent Meals:', 'madu' ),
		'not_found'          => __( 'No Meals found.', 'madu' ),
		'not_found_in_trash' => __( 'No Meals found in Trash.', 'madu' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'madu' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
	);

	register_post_type( 'specialties', $args );
}
add_action( 'init', 'madu_specialties' );

// Widget zone
function madu_widgets() {
	register_sidebar(
		array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		));
}
add_action('widgets_init', 'madu_widgets');




// Modify The Read More Link Text
function modify_read_more_link() {
    return '<a class="specialty_link" href="' . get_permalink() . '">Read more </a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * Filter the except length.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 150;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );