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
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_front-page_1" />
		
		<div class="main-text">
			<p>Lycée des industries de la <span class="green">chimie</span> de l'agroalimentaire de la <span class="green">cosmétique</span> et de la pharmacie des entreprises de propreté et de <span class="green">stérilisation</span></p>
			<div class="link-buttons">
				<a href="#" class="btn btn-primary orange">Nos formations</a>
				<a href="#" class="btn btn-secondary green">Nous contacter</a>
			</div>
		</div>

		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_front-page_2" />
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_front-page_3" /> -->
	</div>
	
	<div class="front-page__liens">
		<div class="container">
			<a href="#" class="single-lien"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_pronote.png" alt="Icone_pronote"><span>Accès Pronote</span></a>
			<a href="#" class="single-lien"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_alternance.png" alt="Icone_alternance"><span>Formation en alternance</span></a>
			<a href="#" class="single-lien"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_ent.png" alt="Icone_ENT"><span>Accès ENT</span></a>
		</div>
	</div>
	
	<div class="front-page__actualites">
		<div class="container">
			<h2>Actualités</h2>
		</div>
	</div>
	
	<div class="front-page__formations">
		<div class="container">
			<h2>Nos formations</h2>
			
			<div class="all_formations">
				<div class="single-formation">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation_1">
						<p>BTS Bio <span class="orange">Qualité</span></p>
					</a>
				</div>
				<div class="single-formation">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation_2">
						<p>BP Bio Industries de <span class="orange">Transformation</span></p>
					</a>
				</div>
				<div class="single-formation">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation_3">
						<p>BP Procédés de la <span class="orange">Chimie</span> de <span class="orange">l'Eau</span> et des <span class="orange">Papiers Cartons</span> (2nde PMIA)</p>
					</a>
				</div>
				<div class="single-formation">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation_4">
						<p>BP <span class="orange">Hygiène</span>, Propreté et <span class="orange">Stérilisation</span></p>
					</a>
				</div>
				<div class="single-formation">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Photo_formation_5">
						<p>CAP Agent de <span class="orange">Propreté</span> et <span class="orange">d'Hygiène</span></p>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="front-page__questions">
		<div class="container">
			<div class="single-question-card bg-orange">
				<p><strong>Une question ? Une remarque ?</strong></p>
				<a href="#" class="btn btn-primary orange">Nous contacter</a>
			</div>
			<div class="single-question-card bg-green">
				<p><strong>Intéressé par l'apprentisage ?</strong></p>
				<a href="#" class="btn btn-primary green">+ d'infos</a>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>