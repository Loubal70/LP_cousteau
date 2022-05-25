<?php get_header(); ?>

<section class="template-visite">
    <div class="visite__header">
        <div>
            <h1 class="title">Visite du lycée</h1>
            <p><?php the_field('introduction_visite_du_lycee', 'options'); ?></p>
        </div>
        <div>
            <?php if( get_field( 'image_introductive_visite_lycee', 'options' ) ) : ?>	
                <?= wp_get_attachment_image(get_field( 'image_introductive_visite_lycee', 'options' ), 'medium' ); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
            <?php endif; ?>
        </div>
        <span id="square1"></span>
        <span id="square2"></span>
    </div>

    <div class="visite__card">
        <p><?php the_field('texte_qualite_formation', 'options'); ?></p>

        <?php if( get_field( 'image_secteur_formation', 'options' ) ) : ?>	
            <?= wp_get_attachment_image(get_field( 'image_secteur_formation', 'options' ), 'medium' ); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
        <?php endif; ?>
    </div>

    <div class="visite__horraire">
        <div>
            <span id="square3"></span>
            <span id="square4"></span>
            <?php if( get_field( 'image_horaires_des_cours', 'options' ) ) : ?>	
                <?= wp_get_attachment_image(get_field( 'image_horaires_des_cours', 'options' ), 'medium' ); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
            <?php endif; ?>
        </div>
        <div>
            <p><?php the_field('horaires_des_cours', 'options') ?></p>
        </div>
    </div>

    <div class="visite__infos">
        <p><?php the_field('ouverture_etablissement', 'options') ?></p>
    </div>

</section>

<?php get_footer(); ?>