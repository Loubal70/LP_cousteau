<?php get_header(); ?>

<div class="template-entreprises content-body container">
    <div class="entreprises__presentation">
        <h1 class="title"><?php the_title() ?></h1>
        <div class="presentation__content-entreprise">
            <?php if(have_posts()) : 
                while(have_posts()) : the_post(); ?> 
                    <?php the_content(); ?> 
                <?php endwhile;
            endif; ?>
        </div>
    </div>
    <div class="entreprises__faq">
        <h2>Foire aux questions</h2>
        <div>
            <details>
                <summary>Pourquoi embaucher un alternant ?</summary>
                Embaucher un alternant peut...
            </details>
            <details>
                <summary>Pourquoi embaucher un alternant ?</summary>
                Embaucher un alternant peut...
            </details>
            <details>
                <summary>Pourquoi embaucher un alternant ?</summary>
                Embaucher un alternant peut...
            </details>
        </div>
    </div>
    <div class="entreprises__contact">
        <h2>Contact</h2>
        <div>
            <p>Pour plus d’informations sur la taxe d’apprentissage, veuillez contacter Mme LEGRAND</p>
            <button href="https://lyceecousteau.prod.louis-boulanger.fr/contactez-nous/">Nous Contacter</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>