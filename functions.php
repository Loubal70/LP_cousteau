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

    if( is_page($page = "internat") )
    {
        wp_enqueue_script( 'internat', get_template_directory_uri().'/assets/js/internat.js', array( 'jquery' ), null, true );
    }

    if( is_singular('formations') )
    {
        wp_enqueue_script( 'formations', get_template_directory_uri().'/assets/js/formations.js', array( 'jquery' ), null, true );
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
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-welcome-learn-more',   
        'supports'           => array( 'title', 'editor', 'author' ),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'formations', $args );
}
add_action( 'init', 'cpt_formations' );


/**
 *  Ajout d'un champ Niveau pour le type de contenu "Formations"
 */
add_action( 'init', 'create_taxonomy_duree_for_formations', 0 );
function create_taxonomy_duree_for_formations() {

    // Labels part for the GUI

    $labels = array(
        'name' => _x( 'durée', 'duree' ),
        'singular_name' => _x( 'Durée', 'duree' ),
        'search_items' => __( 'Rechercher une durée' ),
        'popular_items' => __( 'Durée populaire' ),
        'all_items' => __( 'Toutes les durées' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editer une durée' ),
        'update_item' => __( 'Mettre à jour' ),
        'add_new_item' => __( 'Ajouter une durée' ),
        'new_item_name' => __( 'Ajouter un nom pour cette durée' ),
        'separate_items_with_commas' => __( 'Separate topics with commas' ),
        'add_or_remove_items' => __( 'Ajouter ou supprimer une durée' ),
        'choose_from_most_used' => __( 'Choisir parmis les durées populaires' ),
        'menu_name' => __( 'Durée' ),
    );

    // Now register the non-hierarchical taxonomy like tag

    register_taxonomy('duree','formations',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'duree' ),
    ));
}

/**
 *  Ajout d'un champ Niveau pour le type de contenu "Formations"
 */
add_action( 'init', 'create_taxonomy_niveau_for_formations', 0 );
function create_taxonomy_niveau_for_formations() {

    // Labels part for the GUI

    $labels = array(
        'name' => _x( 'Niveau d\'étude', 'niveau' ),
        'singular_name' => _x( 'Niveau', 'niveau' ),
        'search_items' => __( 'Rechercher une niveau' ),
        'popular_items' => __( 'Niveau populaire' ),
        'all_items' => __( 'Tous les niveaux' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Editer un niveau' ),
        'update_item' => __( 'Mettre à jour' ),
        'add_new_item' => __( 'Ajouter un niveau' ),
        'new_item_name' => __( 'Ajouter un nom pour ce niveau' ),
        'add_or_remove_items' => __( 'Ajouter ou supprimer une niveau' ),
        'choose_from_most_used' => __( 'Choisir parmis les niveaux populaires' ),
        'menu_name' => __( 'Niveau d\'étude' ),
    );

    // Now register the non-hierarchical taxonomy like tag

    register_taxonomy('niveau','formations',array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'niveau' ),
    ));
}


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
		'page_title' 	=> 'Internat',
		'menu_title'	=> 'Internat',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Pied de page',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/*
* Add image in menu items
*/

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

// function prefix_add_button_after_menu_item_children( $item_output, $item, $depth, $args ) {

//     if ( $args->theme_location == 'main' ) {

//         if ( in_array( 'menu-item-has-children', $item->classes ) || in_array( 'page_item_has_children', $item->classes ) ) {
//             $item_output = str_replace( $args->link_after . '</a>', $args->link_after . '</a><button class="sub-menu-toggle" aria-expanded="false" aria-pressed="false"><span class="screen-reader-text">' . _x( 'open dropdown menu', 'verb: open the menu', 'text-domain' ) . '</span></button>', $item_output );
//         }
//     }

//     return $item_output;
// }
// add_filter( 'walker_nav_menu_start_el', 'prefix_add_button_after_menu_item_children', 10, 4 );