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
        <?php if( have_rows( 'faq', 'options' ) ): ?>
            <div>
                <?php while ( have_rows( 'faq', 'options' ) ) : the_row(); ?>
                    <details>
                        <summary>
                            <?php 
                                the_sub_field('question', 'options');
                            ?>
                        </summary>
                        <?php the_sub_field('reponse', 'options') ?>
                    </details>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="entreprises__contact">
        <h2>Contact</h2>
        <div>
            <p><?php the_field('espace_entreprise_contact', 'options'); ?></p>
            <button href="https://lyceecousteau.prod.louis-boulanger.fr/contactez-nous/">Nous Contacter</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>