<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header(); 

?>

<div class="template-front-page content-body">

	<?php //if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
	<!-- <h1><?php //the_title(); ?></h1> -->
	
	<?php //the_content(); ?>
	
	<?php //endwhile; endif; ?>

	<div class="front-page__entete">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_front-page_1" /> -->
		
		<div class="main-text container">
			<p>Lycée des industries de la <span class="green">chimie</span> de l'agroalimentaire de la <span class="green">cosmétique</span> et de la pharmacie des entreprises de propreté et de <span class="green">stérilisation</span></p>
			<div class="link-buttons">
				<a href="#" class="btn btn-primary orange">Nos formations</a>
				<a href="#" class="btn btn-secondary green">Nous contacter</a>
			</div>
		</div>
	</div>
	
	<div class="front-page__liens">
		<div class="container">

		<?php
			$pronote 				= get_field('liens_dacces_a_pronote', 'options');
			$alternance 			= get_field('liens_dacces_a_formation_en_alternance', 'options');
			$ent 					= get_field('liens_dacces_a_lent', 'options');
		?>
			<?php if ( $pronote ): ?>
				<a href="<?= $pronote ?>" class="single-lien" target="_blank">
					<img 
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_pronote.png" 
						class="custom-size"
						alt="Icone_pronote">
						Accès Pronote
				</a>
			<?php endif; ?>

			<?php if ( $alternance ): ?>
				<a href="<?= $alternance ?>" class="single-lien" target="_blank">
					<img 
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_alternance.png" 
						class="custom-size"
						alt="Icone_alternance">
						Formations en alternance
				</a>
			<?php endif; ?>

			<?php if ( $ent ): ?>
				<a href="<?= $ent ?>" class="single-lien" target="_blank">
					<img 
						src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_ent.png" 
						class="custom-size"
						alt="Icone_ENT">
						Accès ENT
				</a>
			<?php endif; ?>

		</div>
	</div>
	
	<div class="front-page__actualites">
		<div class="container">
			<h2>Actualités</h2>

			<div class="sliders">

				<?php
					$args = array(
						'post_type' 		=> 'post',
						'post_status' 		=> 'publish',
						'posts_per_page' 	=> 8,

					);
					$query = new WP_Query( $args );
				?>

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="slider">
						<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Article sans Image">
						<?php endif; ?>
						<div class="slider__content">
							<h3><?php the_title(); ?></h3>
							<a href="<?php echo the_permalink(); ?>">En savoir plus</a>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			</div>

		</div>
	</div>
	
	<div class="front-page__formations">
		<div class="container">
			<h2>Nos formations</h2>
			
			<div class="all_formations">
				<?php
					$args = array(
						'post_type' 		=> 'formations',
						'post_status' 		=> 'publish',
						'posts_per_page' 	=> 8, 
						'orderby' 			=> 'title', 
						'order' 			=> 'ASC', 

					);
					$query = new WP_Query( $args );
				?>

				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="single-formation">
						<a href="<?= get_the_permalink(); ?>">
							<div class="image">
								<?php if(has_post_thumbnail()): ?>
									<?php echo wp_get_attachment_image(get_post_thumbnail_id()) ?>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation">
								<?php endif;?>
							</div>
							<h3><?php the_title() ?></h3>
						</a>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	
	<div class="front-page__questions">
		<div class="container">
			<div class="single-question-card bg-orange">
				<p><strong>Une question ? Une remarque ?</strong></p>
				<a href="#" class="btn btn-primary orange">Nous contacter</a>
			</div>
			<!-- <div class="single-question-card bg-green">
				<p>Intéressé par l'apprentisage ?</p>
				<a href="#" class="btn btn-primary green">+ d'infos</a>
			</div> -->
		</div>
	</div>

</div>

<?php get_footer(); ?>