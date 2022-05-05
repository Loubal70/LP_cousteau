        <footer class="site__footer">
            <div class="container">                
                <img class="logo__footer" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo_Lycée_Cousteau_N&B" />

                <div class="infos-contact">
                    <ul>
                        <li>Lycée Professionnel Jacques-Yves Cousteau</li>
                        <li>27 rue Pasteur BP 2066<br/>5944<br/>WASQUEHAL CEDEX</li>
                        <li><a href="tel:+33320723759">03 20 72 37 59</a></li>
                    </ul>
                </div>

                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'ul', 'menu_class' => 'site__footer__menu' ) ); ?>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>