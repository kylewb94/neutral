<?php

// Enqueue CSS and JS
function neutral_scripts() {

    $version = wp_get_theme()->get( 'Version' );
	
	wp_register_style(
		'bootstrap-style',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'
	);
	wp_register_style(
		'reset-style',
		get_template_directory_uri() . '/css/reset.css',
		'bootstrap-style'
	);
	wp_register_style(
		'custom-style',
		get_template_directory_uri() . '/style.css',
		'bootstrap-style'
	);
    wp_register_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,200;0,400;0,500;0,700;1,400&display=swap',
		'bootstrap-style'
	);
	wp_register_style(
		'font-awesome',
		'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		'bootstrap-style'
	);
	wp_enqueue_style(
		'bootstrap-style'
	);
	wp_enqueue_style(
		'reset-style'
	);
    wp_enqueue_style(
		'custom-style'
	);
    wp_enqueue_style(
		'google-fonts'
	);
    wp_enqueue_style(
		'font-awesome'
	);
	wp_enqueue_script(
		'jquery-script',
		'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
		array('jquery'),
		'3.5.1',
		true
	);
	wp_enqueue_script(
		'popper-script',
		'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
		array('jquery'),
		'1.16.0',
		true
	);
	wp_enqueue_script(
		'bootstrap-script',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
		array('jquery'),
		'4.5.0',
		true
	);
    
}

    add_action('wp_enqueue_scripts','neutral_scripts');


// Register Nav Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme Support
function neutral_setup() {
	
	// Thumbnails
	add_theme_support('post-thumbnails');
	
	// Nav Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'neutral_setup' ),
	));
	
}

	add_action( 'after_setup_theme', 'neutral_setup' );


// Widgets
function neutral_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="p-4">',
		'after_widget' => '</div>', '<hr>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init', 'neutral_init_widgets');


//Remove archive taxonomy name
function neutral_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'neutral_archive_title' );


// Customizer File
require get_template_directory(). '/inc/customizer.php';

?>