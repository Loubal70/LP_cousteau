<div class="back-to-top" onclick="topFunction();">
  <i class="fa fa-angle-up"></i>
</div>

<footer class="site__footer">
    <div class="container">                
        <img class="logo__footer" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-cousteau-blanc.png" alt="Logo_Lycée_Cousteau_N&B" />

        <div class="infos-contact">
            <div>Lycée Professionnel Jacques-Yves Cousteau</div>
            <div><?php echo get_field('adresse', 'options'); ?></div>
            <div>
                <?php $tel = get_field('tel', 'options'); ?>
                <a href="tel:<?= (!empty($tel) ? str_replace(' ','',$tel) : "") ?>"><?= (!empty($tel) ? str_replace('+33','0',$tel) : "") ?></a>
            </div>
            
        </div>

        <?php wp_nav_menu( array( 
            'theme_location'    => 'footer', 
            'container'         => 'div', 
            'menu_class'        => 'site__footer__menu' ) ); ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>