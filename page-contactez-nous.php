<?php get_header(); ?>

<section class="template-contact">

<h1 class="title">Contact</h1>

<div class="contact__header">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mail.webp" >
    </div>
    <div>
        <h2>Nous joindre par téléphone :</h2>
        <p>
            <?php echo get_field('adresse', 'options'); ?>
        </p>
        <br>
        <p><span class="orange-text">Téléphone :</span>  
            <?php $tel = get_field('tel', 'options'); ?>               
            <a href="tel:<?= (!empty($tel) ? str_replace(' ','',$tel) : "") ?>">
                <?= (!empty($tel) ? str_replace('+33','0',$tel) : "") ?>
            </a>
        </p>
        <br>
        <p><span class="orange-text">Responsable Légal :</span> M. BLANDIN </p>
    </div>
</div>

<div class="contact__mail">
    <div>
        <h2>Nous joindre par mail :</h2>
            <h3>Direction :</h3>
        <?php while ( have_rows( 'direction', 'options' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?>, <?php the_sub_field( 'fonction', 'options' ); ?></p>
                <a href="mailto:<?php the_sub_field( 'adresse_mail', 'options' ); ?>"><?php the_sub_field( 'adresse_mail', 'options' ); ?></a>
        <?php endwhile; ?>
            <h3>Service de Gestion :</h3>
        <?php while ( have_rows( 'service-de-gestion', 'options' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?>, <?php the_sub_field( 'fonction', 'options' ); ?></p>
                <a href="mailto:<?php the_sub_field( 'adresse_mail', 'options' ); ?>"><?php the_sub_field( 'adresse_mail', 'options' ); ?></a>
        <?php endwhile; ?>
            <h3>Directrice déléguée aux formations professionnelles et technologiques :</h3>
         <?php while ( have_rows( 'directeur-delegue', 'options' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?>, <?php the_sub_field( 'fonction', 'options' ); ?></p>
                <a href="mailto:<?php the_sub_field( 'adresse_mail', 'options' ); ?>"><?php the_sub_field( 'adresse_mail', 'options' ); ?></a>
        <?php endwhile; ?>
    </div>
    <div>
        <span id="square1"></span>
        <span id="square2"></span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-mail-lycee.webp" alt="">
    </div>
</div>

<div class="contact__scolaire">
    <div>
        <span id="square3"></span>
        <span id="square4"></span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-direction-lycee.webp" alt="">
    </div>
    <div>
        <h3>Vie Scolaire :</h3>
        <?php while ( have_rows( 'vie-scolaire', 'options' ) ) : the_row(); ?>
            <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?>, <?php the_sub_field( 'fonction', 'options' ); ?></p>
            <a href="mailto:<?php the_sub_field( 'adresse_mail', 'options' ); ?>"><?php the_sub_field( 'adresse_mail', 'options' ); ?></a>
            <br/>
            <br>
        <?php endwhile; ?>

        <h3>Services médico-sociaux</h3>
        <?php while ( have_rows( 'service-medico-sociaux', 'options' ) ) : the_row(); ?>
            <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?>, <?php the_sub_field( 'fonction', 'options' ); ?></p>
            <a href="mailto:<?php the_sub_field( 'adresse_mail', 'options' ); ?>"><?php the_sub_field( 'adresse_mail', 'options' ); ?></a>
            <br/>
            <br>
        <?php endwhile; ?>
    </div>
</div>

</section>

<?php get_footer(); ?>