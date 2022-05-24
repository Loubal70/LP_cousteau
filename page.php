<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header(); 

?>
  <?php if( have_posts() ) : 
    while( have_posts() ) : 
      the_post(); 
  ?>
    
    <article class="post formations container">
      <h1><?php the_title(); ?></h1>
      <div class="post__content">
        <main>
          <?php the_content(); ?>
        </main>
      </div>
    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?> 