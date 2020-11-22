<?php 
/**
 * 	Template Name: Projets 	
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php 
	wp_enqueue_style( "stylesheet_projets.css", get_stylesheet_directory_uri(). '/stylesheet_projets.css', array(), time(), false );
	wp_enqueue_script( "script_projets.js", get_stylesheet_directory_uri() . '/script_projets.js', array(), ”, false );
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
	
    <title>Projets</title>
</head>
<body>

	
		<?php if (!is_front_page()) : 
			/* Affiche le code suivant uniquement si nous ne sommes PAS sur la page d'accueil */ ?>
			<div class="banniere projet">
				<h1 class="titrePage projet" <?php the_field('titre_page') ?>>Projets | Nature Québec</h1>
				<img class="imageBanniere projet" src="<?php the_field('image_banniere') ?>">
			</div>
			<div class="blocTexte projet">
				<p><?php the_field('bloc_texte') ?></p>
			</div>
			<div class="sousBanniere">
				<div class="imagesSousBanniere">	
					<a href="#sectionEnvironnementSautDePage" class="imageSousBanniereInd">
						<img src="<?php the_field('image_environnement') ?>" style="background-color: <?php the_field('couleur_environnement') ?>">
						<h3><?php the_field('titre_environnement') ?></h3>
					</a>
					<a href="#sectionForetSautDePage" class="imageSousBanniereInd">
						<img src="<?php the_field('image_foret') ?>" style="background-color: <?php the_field('couleur_foret') ?>">
						<h3><?php the_field('titre_foret') ?></h3>
					</a>
					<a href="#sectionBiodiversiteSautDePage" class="imageSousBanniereInd">
						<img src="<?php the_field('image_biodiversite') ?>" style="background-color: <?php the_field('couleur_biodiversite') ?>">
						<h3><?php the_field('titre_biodiversite') ?></h3>
					</a>
					<a href="#sectionEnergieSautDePage" class="imageSousBanniereInd">
						<img src="<?php the_field('image_energie') ?>" style="background-color: <?php the_field('couleur_energie') ?>">
						<h3><?php the_field('titre_energie') ?></h3>
					</a>
				</div>
			</div>
		<?php endif; ?>

<?php endwhile; // Fermeture de la boucle ?>


<?php
$environnement = new WP_Query( array(
	'post_type' => 'Projet',
	'tax_query' => array(
		array (
			'taxonomy' => 'projets_parent',
			'field' => 'slug',
			'terms' => 'environnement_urbain'
 		)
 	),
));
$foret = new WP_Query( array(
	'post_type' => 'Projet',
	'tax_query' => array(
		array (
			'taxonomy' => 'projets_parent',
			'field' => 'slug',
			'terms' => 'foret'
 		)
 	),
));
$biodiversite = new WP_Query( array(
	'post_type' => 'Projet',
	'tax_query' => array(
		array (
			'taxonomy' => 'projets_parent',
			'field' => 'slug',
			'terms' => 'biodiversite'
 		)
 	),
));
$energie = new WP_Query( array(
	'post_type' => 'Projet',
	'tax_query' => array(
		array (
			'taxonomy' => 'projets_parent',
			'field' => 'slug',
			'terms' => 'energie'
 		)
 	),
));
?>


<div class="sectionProjet enfant">
		
		<div class="swiper-container environnement">
		<div id="sectionEnvironnementSautDePage" class="bandeauProjetsParent" style="background-color: <?php the_field('couleur_environnement') ?>">
				<img src="<?php the_field('image_environnement') ?>"> 
				<h3><?php the_field('titre_environnement') ?></h3>
				<p><?php the_field('description_environnement') ?></p>	
			</div>
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
			<div class="swiper-wrapper">
				<?php
					/*Projets enfant*/
					while ($environnement->have_posts()) : $environnement->the_post(); 
						get_template_part("partials/projet_slide");
					endwhile; wp_reset_postdata();
				?>
			</div>
			<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
			
		</div>


		<div class="swiper-container foret">
			<div id="sectionForetSautDePage" class="bandeauProjetsParent" style="background-color: <?php the_field('couleur_foret') ?>">
					<img src="<?php the_field('image_foret') ?>"> 
					<h3><?php the_field('titre_foret') ?></h3>
					<p><?php the_field('description_foret') ?></p>	
				</div>
				<?php the_content(); 
				/* Affiche le contenu principal de la page */ ?>
			<div class="swiper-wrapper">
				<?php
					/*Projets enfant*/
					while ($foret->have_posts()) : $foret->the_post(); 
						get_template_part("partials/projet_slide");
					endwhile; wp_reset_postdata();
				?>
			</div>
			<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
    		<div class="swiper-pagination"></div>
		</div>


		<div class="swiper-container biodiversite">
			<div id="sectionBiodiversiteSautDePage" class="bandeauProjetsParent" style="background-color: <?php the_field('couleur_biodiversite') ?>">
				<img src="<?php the_field('image_biodiversite') ?>"> 
				<h3><?php the_field('titre_biodiversite') ?></h3>
				<p><?php the_field('description_biodiversite') ?></p>	
			</div>
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
			<div class="swiper-wrapper">
				<?php
					/*Projets enfant*/
					while ($biodiversite->have_posts()) : $biodiversite->the_post(); 
						get_template_part("partials/projet_slide");
					endwhile; wp_reset_postdata();
				?>
			</div>
			<div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
    		<div class="swiper-pagination"></div>
		</div>


	<div class="swiper-container energie">
		<div id="sectionEnergieSautDePage" class="bandeauProjetsParent" style="background-color: <?php the_field('couleur_energie') ?>">
				<img src="<?php the_field('image_energie') ?>"> 
				<h3><?php the_field('titre_energie') ?></h3>
				<p><?php the_field('description_energie') ?></p>	
			</div>
			<?php the_content(); 
			/* Affiche le contenu principal de la page */ ?>
		<div class="swiper-wrapper">
			<?php
				/*Projets enfant*/
				while ($energie->have_posts()) : $energie->the_post(); 
					get_template_part("partials/projet_slide");
				endwhile; wp_reset_postdata();
			?>
		</div>
		<div class="swiper-button-next"></div>
    	<div class="swiper-button-prev"></div>
    		<div class="swiper-pagination"></div>
	</div>
</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
</body>


<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>


<?php
// Appel le fichier footer.php
get_footer(); ?>

</html>