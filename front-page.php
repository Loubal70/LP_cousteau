<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
 
get_header(); 

$acf_field = (Object) get_field('home_page_data', 'options');

?>

<div class="template-front-page content-body">

	<div class="front-page__entete">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_front-page_1" /> -->
		
		<div class="main-text container">
			<p><?= $acf_field->titre_de_la_page ?></p>
			<div class="link-buttons">
				<?php if ( $acf_field->bouton_a_gauche ): ?>
					<a 
						href="<?= $acf_field->bouton_a_gauche['url'] ?>" 
						class="btn btn-primary orange"
						<?php if ( $acf_field->bouton_a_gauche['target'] ): ?>
							target="<?= $acf_field->bouton_a_gauche['target'] ?>"
						<?php endif; ?>	
					><?= $acf_field->bouton_a_gauche['title'] ?></a>
				<?php endif; ?>
				<?php if ( $acf_field->bouton_a_droite ): ?>
					<a 
						href="<?= $acf_field->bouton_a_droite['url'] ?>" 
						class="btn btn-secondary green"
						<?php if ( $acf_field->bouton_a_droite['target'] ): ?>
							target="<?= $acf_field->bouton_a_droite['target'] ?>"
						<?php endif; ?>	
					><?= $acf_field->bouton_a_droite['title'] ?></a>
				<?php endif; ?>
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
				<a href="<?= $alternance ?>" class="single-lien">
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

			<a href="<?= home_url("/cdi/") ?>" class="single-lien">
				<img 
					src="<?php echo get_template_directory_uri(); ?>/assets/images/book.webp" 
					class="custom-size"
					alt="Icone_CDI">
					CDI
			</a>

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
						'posts_per_page' 	=> get_option( 'posts_per_page' ),

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
				<a href="<?= home_url('/contactez-nous') ?>" class="btn btn-primary orange">Nous contacter</a>
			</div>
			<div class="single-question-card bg-green">
				<p>Intéressé par l'apprentisage ?</p>
				<a href="<?= home_url('/formation/') ?>" class="btn btn-primary green">+ d'infos</a>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>