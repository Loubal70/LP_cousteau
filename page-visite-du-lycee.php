<?php get_header(); ?>

<section class="template-visite">
    <div class="visite__header">
        <div>
            <h1 class="title">Visite du lycée</h1>
            <p><?php the_field('introduction_visite_du_lycee', 'options'); ?></p>
        </div>
        <div>
            <?php if( get_field( 'image_introductive_visite_lycee', 'options' ) ) : ?>	
                <?= wp_get_attachment_image($id_image_intro_visite, 'medium' ); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
            <?php endif; ?>
        </div>
        <span id="square1"></span>
        <span id="square2"></span>
    </div>

    <div class="visite__card">
        <p>Son architecture fonctionnelle et de qualité offre aux élèves et à tous les membres de la communauté éducative un cadre 
            de vie et de travail apprécié et propice à l’épanouissement de chacun. Notre objectif prioritaire est de <span class="orange-text">former et 
            d’accompagner</span> chaque élève pour une insertion sociale et professionnelle réussie dans la voie de leur choix.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-acces/visite-card.webp">
    </div>

    <div class="visite__horraire">
        <div>
        <span id="square3"></span>
        <span id="square4"></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-acces/visite-horraire.webp" alt="Horraire du lycée Cousteau">
        </div>
        <div>
            <p><span class="blue-text">8h à 12h:</span> Cours – Récréation à la pause de 10h</p>
            <p><span class="blue-text">12h à 13h:</span> Repas</p>
            <p><span class="blue-text">13h à 17h:</span> Cours – Récréation à la pause de 15h</p>
        </div>
    </div>

    <div class="visite__infos">
        <p>Accueil ouvert de <span class="orange-text">7h à 18h45</span> sans interruption <br>
        <span class="blue-text">Etablissement ouvert du lundi matin 7 h au vendredi soir 17h</span></p>
    </div>

</section>

<?php get_footer(); ?>