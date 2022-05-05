<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header(); 

?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>