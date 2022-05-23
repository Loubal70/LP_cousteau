<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header();

$args = array(
    'post_type' => 'formations',
    'meta_key'		=> 'alternance',
	'meta_value'    => true,
    'orderby' => 'date',
    'order' => 'ASC'
);
$query = new WP_Query( $args );

$paragrapheACF = get_field('paragraphe_alternance', 'options');
?>
<main class="archive formations container">
    <h1>Formations en alternance</h1>
    <?php if ( $paragrapheACF ): ?>
        <?= $paragrapheACF ?>
    <?php endif; ?>
<?php 
if( $query->have_posts() ) : 
    while( $query->have_posts() ) : $query->the_post(); 
?>
<article class="post">
    <div class="post__content">
        <main>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a class="btn btn-primary btn-formation green" href="<?= the_permalink() ?>">En savoir plus sur le <?php the_title() ?></a>
        </main>
    </div>
</article>
    
<?php 
endwhile;
wp_reset_postdata();
endif;
?>
</main>

<?php get_footer(); ?> 