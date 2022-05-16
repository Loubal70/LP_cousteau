<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header(); 

?>
  <?php if( have_posts() ) : 
    while( have_posts() ) : 
      the_post(); 
      $duree    = get_the_terms( $post->ID, 'duree' ); 
      $niveau   = get_the_terms( $post->ID, 'niveau' ); 
  ?>
    
    <article class="post formations container">
      <h1><?php the_title(); ?></h1>
      <div class="post__content">
        <aside>
          <!-- <a href="<?php echo get_permalink( get_the_ID() ); ?>#presentation">Présentation</a>
          <a href="<?php echo get_permalink( get_the_ID() ); ?>#debouches">Débouchés</a>
          <a href="<?php echo get_permalink( get_the_ID() ); ?>#conditionsacces">Conditions d'accès</a>
          <a href="<?php echo get_permalink( get_the_ID() ); ?>#enseignements">Enseignements</a> -->
        </aside>

        <main>
          <div class="alert">
            <?php if($duree) :  ?>
              <div><?= $duree[0]->name; ?></div>
            <?php endif; ?>
            <?php if($niveau) : ?>
              <div><?= $niveau[0]->name; ?></div>
            <?php endif; ?>
          </div>
          <?php the_content(); ?>
        </main>
      </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?> 