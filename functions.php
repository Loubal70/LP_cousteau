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