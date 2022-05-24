<?php get_header(); ?>

<div class="template-editorial content-body">
    <div class="editorial__presentation container">
        <div>
            <?php 
                $image_id = get_field( 'image_introduction_edito', 'options' );
                if( $image_id ) {	
                    echo wp_get_attachment_image( $image_id, 'full' );
                } else{
                    ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
                    <?php
                }
            ?>
            
        </div>
        <div>
            <h1 class="title"><?php the_title() ?></h1>
            <p><?php the_field('introduction_de_ledito', 'options'); ?></p>
        </div>
    </div>

    <div class="editorial__localisation">
        <p><?php the_field('localisation_lycee', 'options'); ?></p>
        <div>
            <?php $id_image_localisation = get_field( 'image_introduction_edito', 'options' ); ?>

            <?php if( $id_image_localisation ) : ?>	
                <?= wp_get_attachment_image($id_image_localisation, 'medium' ); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
            <?php endif; ?>
        </div>
    </div>

    <div  class="editorial__formation-presentation">
        <p>Notre lycée propose des formations en <span>CAP, BAC PRO et BT</span> dans des secteurs industriels qui recrutent :</p>
        <div class="formation-presentation__gallery">
            <?php if( have_rows( 'secteurs_formation_edito', 'options' ) ): ?>
                <?php while ( have_rows( 'secteurs_formation_edito', 'options' ) ) : the_row(); ?>
                    <div>
                        <?php $id_image_secteur = get_sub_field( 'image_secteur', 'options' ); ?>

                        <?php if( $id_image_secteur ) : ?>	
                            <?= wp_get_attachment_image($id_image_secteur, 'medium' ); ?>
                        <?php else: ?>
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
                        <?php endif; ?>

                        <p><?php the_sub_field('titre_categorie_formation', 'options'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="formation-presentation__insertion">
            <p>L’insertion des jeunes diplômés dans la vie active s’en trouve donc favorisée.</p>
            <span class="underline-text"></span>
        </div>
    </div>

    <div class="editorial__young-student">
        <div>
            <?php $id_image_structure_educative = get_field( 'image_structure_educative', 'options' ); ?>

            <?php if( $id_image_structure_educative ) : ?>	
                <?= wp_get_attachment_image($id_image_structure_educative, 'medium' ); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
            <?php endif; ?>
        </div>
        <div>
            <p><?php the_field('texte_structure_educative', 'options'); ?></p>
        </div>
    </div>

    <div class="editorial__resume">
        <p><?php the_field('informations_supplementaire_lycee', 'options'); ?></p>

        <?php $id_image_supp_lycee = get_field( 'image_supplementaire_lycee', 'options' ); ?>

        <?php if( $id_image_supp_lycee ) : ?>	
            <?= wp_get_attachment_image($id_image_supp_lycee, 'medium' ); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
        <?php endif; ?>

        <p><?php the_field('conclusion_edito', 'options'); ?></p>
    </div>

    <div class="editorial__proviseur">
        <?php while ( have_rows( 'direction', 'options' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'prenom', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?></p>
                <p><?php the_sub_field( 'fonction', 'options' ); ?></p>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>