<?php

    function load_scripts(){
        
        wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css', array(), '1.0', 'all' );
        
        wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), null, true );
    }

    add_action( 'wp_enqueue_scripts', 'load_scripts' );

    // Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 90, 'width' => 132 ) );

// Registrando Widgets
add_action( 'widgets_init', 'roki_widgets' );
function roki_widgets(){

	register_sidebar(
		array(
			'name' => __( 'Header Social', 'roki'),
			'id' => 'social-header',
			'description' => __( 'HTML to be used on Social Header', 'roki'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer Frase', 'roki'),
			'id' => 'footer',
			'description' => __( 'HTML to be used on Footer Page', 'roki'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Social', 'roki'),
			'id' => 'footer-2',
			'description' => __( 'HTML to be used on Footer Page', 'roki'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Footer Contato', 'roki'),
			'id' => 'footer-3',
			'description' => __( 'HTML to be used on Footer Page', 'roki'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
}



?>


