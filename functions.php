<?php
    register_nav_menus( array(
        'mainNav' => 'Main Nav',
    ) );

	add_theme_support( 'post-thumbnails' );

    function create_post_type() {
		register_post_type( 'faqs_cpt',
			array(
				'labels' => array(
					'name' => __( 'Faqs' ),
					'singular_name' => __( 'Faq' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-megaphone',
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'taxonomy' ),
			'taxonomies'  => array( 'category' )
			)
        );
	}
	add_action( 'init', 'create_post_type' );
?>
