<?php

    function load_scripts(){
        
        wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/style.css', array(), '1.0', 'all' );
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



	
// Função de Configuração do Tema
function roki_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Main Menu', 'roki' ),
			'footer_menu' => __( 'Footer Menu', 'roki' )
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );

	// Suporte ao Gutenberg
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Blood Red' , 'roki' ),
			'slug' => 'blood-red',
			'color' => '#b9121b'
		),
		array(
			'name' => __( 'White' , 'roki' ),
			'slug' => 'white',
			'color' => '#ffffff'
		)		
	) );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/style-editor.css' );
	add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'roki_config', 0 );

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

function register_cpt_evento() {
  register_post_type('evento', array(
    'labels' => array(
      'name' => _x('Eventos', 'evento'),
      'singular_name' => _x('Evento', 'evento'),
      'add_new' => _x('Adicionar novo', 'evento'),
      'add_new_item' => _x('Adicionar novo Evento', 'evento'),
      'edit_item' => _x('Edit Evento', 'evento'),
      'new_item' => _x('Novo Evento', 'evento'),
      'view_item' => _x('Ver Evento', 'evento'),
      'search_items' => _x('Pesquisar Eventos', 'evento'),
      'not_found' => _x('Nenhum evento encontrado', 'evento'),
      'not_found_in_trash' => _x('Nenhum evento encontrado na lixeira', 'evento'),
      'parent_item_colon' => _x('Parent Evento:', 'evento'),
      'menu_name' => _x('Eventos', 'evento')
    ),
    'hierarchical' => false,
    'description' => '',
    'supports' => array('title', 'editor', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes', 'post-formats'),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-calendar-alt',
    'menu_position' => '5',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'capability_type' => 'post',
	'rewrite' => true,
	
  ));
}
add_action('init', 'register_cpt_evento');

add_action( 'admin_menu', 'remove_links_menu' );
function remove_links_menu() {
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('edit-comments.php'); // Comentários
	// remove_menu_page('index.php'); // Painel
	// remove_menu_page('upload.php'); // Media
	// remove_menu_page('link-manager.php'); // Links
	// remove_menu_page('edit.php?post_type=page'); // Paginas
	// remove_menu_page('themes.php'); // Aparência
	// remove_menu_page('plugins.php'); // Plugins
	// remove_menu_page('users.php'); // Usuários
	// remove_menu_page('tools.php'); // Ferramentas
	// remove_menu_page('options-general.php'); // Configurações
}

function limit_words($string, $word_limit) {  
	$words = explode(' ', $string, ($word_limit + 1));  
	if(count($words) > $word_limit) { array_pop($words); array_push($words, "..."); }  
	return implode(' ', $words);
}

?>
