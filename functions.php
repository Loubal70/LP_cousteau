<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Déclaration des menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// Déclaration du CSS et du JS
function cousteau_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery');
    
    // Ajout de la librairie Slick
    wp_enqueue_style(
        'slick/css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
    );  
    wp_enqueue_style(
        'slick-theme/css',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css'
    );  
    wp_enqueue_script(
        'slick/js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        ['jquery'],
        null,
        true);

    // Déclarer le JS
	wp_enqueue_script( 
        'cousteau', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    if( is_front_page() )
    {
        wp_enqueue_script( 'homestuff', get_template_directory_uri().'/assets/js/frontpage.js', array( 'jquery' ), null, true );
    }
    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'cousteau',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Ajout de la librairie Font Awesome
    wp_enqueue_style(
        'fontawesome.css', 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css'
    );


    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style( 
        'cousteau-mormalize', 
        get_template_directory_uri() . '/assets/css/normalize.css',
        array(), 
        '1.0'
    );
    wp_enqueue_style( 
        'cousteau-css', 
        get_template_directory_uri() . '/assets/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'cousteau_register_assets' );

// Custom Post Type : Formations
function cpt_formations() {
    $labels = array(
        'name'                  => _x( 'Formations', 'Post type general name', 'Formation' ),
        'singular_name'         => _x( 'Formation', 'Post type singular name', 'Formation' ),
        'menu_name'             => _x( 'Formations', 'Admin Menu text', 'Formation' ),
        'name_admin_bar'        => _x( 'Formation', 'Add New on Toolbar', 'Formation' ),
        'add_new'               => __( 'Ajouter une formation', 'Formation' ),
        'add_new_item'          => __( 'Ajouter une nouvelle formation', 'Formation' ),
        'new_item'              => __( 'Ajouter formation', 'Formation' ),
        'edit_item'             => __( 'Modifier formation', 'Formation' ),
        'view_item'             => __( 'Voir les formation', 'Formation' ),
        'all_items'             => __( 'Toutes les formations', 'Formation' ),
        'search_items'          => __( 'Recherche une formations', 'Formation' ),
        'not_found'             => __( 'Formation non trouvée.', 'Formation' ),
        'not_found_in_trash'    => __( 'Aucunes formations à la corbeille.', 'Formation' ),
        'featured_image'        => _x( 'Image de formation', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Formation' ),
        'set_featured_image'    => _x( 'Ajouter une image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Formation' ),
        'remove_featured_image' => _x( 'Enlever l\'image de la formation', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Formation' ),
        'use_featured_image'    => _x( 'Utiliser une illustration', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Formation' ),
        'archives'              => _x( 'Listes des formation', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Formation' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Champs formations',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'formation' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'formations', $args );
}
add_action( 'init', 'cpt_formations' );

/**
 *  Ajout d'une page ACF
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Paramètres Généraux',
		'menu_title'	=> 'Paramètres',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-admin-settings',
		'position'      => 2,
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Paramètres Généraux',
		'menu_title'	=> 'Général',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pied de page',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Add image in menu items
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	foreach( $items as &$item ) {
		$icon = get_field('image_du_menu', $item);
		if( $icon ) {
			$item->title .= '<div>'.wp_get_attachment_image($item->image_du_menu)."</div>";	
		}	
	}
	return $items;
}