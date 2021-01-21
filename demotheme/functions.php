<?php
function create_posttype() {
	
	register_post_type( 'points',
        array(
            'labels' => array(
                'name' => __( 'Points' ),
                'singular_name' => __( 'Points' )
            ),
			'supports' => array('title', 'editor', 'page-attributes'),
			
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'points'),
        )
    );
	
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
        )
    );
	
	register_post_type( 'samples',
        array(
            'labels' => array(
                'name' => __( 'Samples' ),
                'singular_name' => __( 'Samples' )
            ),
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'samples'),
        )
    );
	
	register_post_type( 'persons',
        array(
            'labels' => array(
                'name' => __( 'Persons' ),
                'singular_name' => __( 'Persons' )
            ),
			'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'persons'),
        )
    );
	add_image_size( 'service-image', 128, 128 );
}

add_action( 'init', 'create_posttype' );

add_theme_support( 'post-thumbnails' ); 

?>