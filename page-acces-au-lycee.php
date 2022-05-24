<?php get_header(); ?>

<section class="template-access">
    <div class="access__header">
        <h1 class="title">Accès au lycée</h1>
        <span id="circle1"></span>
        <span id="circle2"></span>
        <span id="circle3"></span>
        <span id="circle4"></span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-acces/acces-au-lycee-header.webp" alt="">
    </div>

    <div class="access__cars">
        <div>
            <h2>En Voiture</h2>
            <?php echo get_field('paragraphe_en_voiture', 'options'); ?>
        </div>
        <div>
            <span id="circle5"></span>
            <?php $id_image_en_voiture = get_field( 'image_en_voiture', 'options' ); ?>

            <?php if( $id_image_en_voiture ) : ?>    
                <?= wp_get_attachment_image($id_image_en_voiture, 'medium' ); ?>
            <?php else: ?>
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-acces/icon_car.webp">
            <?php endif; ?>

            
        </div>
    </div>

    <div class="access__transport">
        <div>
            <span id="circle6"></span>
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-acces/acces-transport.webp" alt="">
        </div>
        <div>
            <h2>Transports en commun</h2>
            <?php echo get_field('paragraphe_transports_en_commun', 'options'); ?>
        </div>
    </div>

    <div class="access__maps">
        <div>
            <h2>En bus :</h2>
            <p><?php echo get_field('texte_ligne_de_bus', 'options'); ?></p>
        </div>
        <div>
            <span id="square1"></span>
            <span id="square2"></span>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.405741746404!2d3.1232359290149945!3d50.6722317015382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c329989edab28b%3A0xfed724f30a635d8a!2sLyc%C3%A9e%20Jacques-Yves%20Cousteau!5e0!3m2!1sfr!2sfr!4v1652428033577!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</section>

<?php get_footer(); ?>