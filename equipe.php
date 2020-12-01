<?php
/**
 * Template Name: Equipe
 */

// Appel le fichier header.php
get_header(); 

?>

<?php 
	wp_enqueue_style( "stylesheet_equipe.css", get_stylesheet_directory_uri(). '/stylesheet_equipe.css', array(), time(), false );
	wp_enqueue_script( "script_equipe.js", get_stylesheet_directory_uri() . '/script_equipe.js', array(), ”, false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Equipe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="banniereWrapper">
		<div class="banniere equipe">
			<h1 class="titrePage equipe">Équipe et conseil d’administration | Nature Québec</h1>
			<img class="image banniere equipe" src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/banniere-equipe.jpg">
		</div>
		<div class="blocTexte equipe">
			<p> Nature Québec peut compter sur l’appui de partenaires financiers. Ceux-ci permettent d’intervenir dans les différents axes de sa mission. Nous les remercions. Merci de faire une différence!</p>
		</div>
	</div>

	<div class="container-fluid wrapper1">
		<div class="row">
			<?php
				$arg = array (
					'post_type' => 'membres_equipe',
					'posts_per_page' => -1,
					'order' => 'ASC',
				);
				$membre = new WP_Query($arg);
				while ($membre->have_posts()) : $membre->the_post();

				$nomMembre = get_field('nom_du_membre');
				$titreMembre = get_field('titre_du_membre');
				$telephoneMembre = get_field('telephone_du_membre');
				$photoMembre = get_field('photo_du_membre');
				$urlMembre = $photoMembre['url'];
				$altMembre = $photoMembre['alt'];
				$courrielMembre = get_field('courriel_du_membre');

				echo '
						<div class="col-md-6 d-flex justify-content-center">
							<div class="equipeWrapper">
								<img src="' . $photoMembre . '" alt="' . $altMembre . '" class="imgEquipe img-fluid">
								<div class="nom">' . $nomMembre . '</div>
								<div class="titre">' . $titreMembre . '</div>
								<div class="contactPhone text-center">' . $telephoneMembre . '</div>
								<div class="contactEmail"><a href="mailto:' . $courrielMembre . '">Contacter</a></div>
							</div>
					</div>';

				?>
				<?php endwhile; wp_reset_postdata(); ?>

		</div>
	</div>

	<div class="container-fluid wrapper2">
		<h1 class="conseilHeader">CONSEIL D’ADMINISTRATION</h1>
		<div class="conseilWrapper">
			<div class="row">
			<?php
				$arg = array (
					'post_type' => 'membres_conseil',
					'posts_per_page' => -1,
					'order' => 'ASC',
				);
				$membre = new WP_Query($arg);
				while ($membre->have_posts()) : $membre->the_post();

				$nomConseil = get_field('nom_membre_conseil');
				$titreConseil = get_field('titre_membre_conseil');
				$photoConseil = get_field('photo_membre_conseil');
				$urlMembre = $photoMembre['url'];
				$altConseil = $photoMembre['alt'];
				$conseilRepresente = get_field('membre_conseil_represente');

				echo '
						<div class="col-sm-4 d-flex justify-content-center">
							<div class="conseilWrapper">
								<img src="' . $photoConseil . '" alt="' . $altConseil . '" class="imgConseil img-fluid">
								<div class="conseilNom text-center">' . $nomConseil . '</div>
								<div class="conseilTitre text-center">' . $titreConseil . '</div>
								<div class="conseilRepresente text-center">' . $conseilRepresente . '</div>
								</div>
						</div>';
			?>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

</body>
</html>

<?php
// Appel le fichier footer.php
get_footer(); ?>