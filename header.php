<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    
        <header class="header">
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo_Lycée_Cousteau_N&B" class="main-logo" />
            </a>  

            <div class="nav-principal-desktop">
                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location'    => 'main', 
                            'container'         => 'ul', 
                            'menu_class'        => 'site__header__menu' 
                        ) 
                    ); 
                ?>
                
                <a href="/contactez-nous" class="btn btn-primary orange link-contact-us">Contactez-nous</a>
            </div>

        </header>

        <?php wp_body_open(); ?>