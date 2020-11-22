<?php 
/**
 * 	Template Name: Home	
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php 
	wp_enqueue_style( "stylesheet_accueil.css", get_stylesheet_directory_uri(). '/stylesheet_accueil.css', array(), time(), false );
	wp_enqueue_script( "script_accueil.js", get_stylesheet_directory_uri() . '/script_accueil.js', array(), ”, false );
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
	
    <title>Accueil</title>
</head>
<body>
    <div class="banniere accueil">
        <img class="imageBanniere accueil" src="https://i.imgur.com/KNdoYch.jpg">
        <div class="slogan">
            <div class="mot1"><h2>Sensibiliser</h2></div>
            <div class="mot2"><h2>Mobiliser</h2></div>
            <div class="mot3"><h2>Agir</h2></div>
        </div>
    </div>

    <div class="resume">
        <img class="imageResume accueil" src="https://i.imgur.com/uyiu3Au.jpg">
        <div class="descriptionResume">
            <p>Depuis 1981, Nature Québec mène des projets touchant à la biodiversité, la forêt, l’énergie et le climat, ainsi que l’environnement urbain. Nature Québec sensibilise, mobilise et agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète.</p> 
        </div>
        <div class="fondProduit"><p>Depuis 1981, Nature Québec mène des projets touchant à la biodiversité, la forêt, l’énergie et le climat, ainsi que l’environnement urbain. Nature Québec sensibilise, mobilise et agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète.</p> </div>
        <button href="PAGE MISSION" class="boutonPageMission">Découvrez Nature Québec</button>
    </div>

    <div class="projets accueil">
        <a href="#sectionEnvironnementSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_environnement') ?>">
            <img src="<?php the_field('image_environnement') ?>">
            <h3><?php the_field('titre_environnement') ?></h3>
        </a>
        <a href="#sectionForetSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_foret') ?>">
            <img src="<?php the_field('image_foret') ?>">
            <h3><?php the_field('titre_foret') ?></h3>
        </a>
        <a href="#sectionBiodiversiteSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_biodiversite') ?>">
            <img src="<?php the_field('image_biodiversite') ?>">
            <h3><?php the_field('titre_biodiversite') ?></h3>
        </a>
        <a href="#sectionEnergieSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_energie') ?>">
            <img src="<?php the_field('image_energie') ?>">
            <h3><?php the_field('titre_energie') ?></h3>
        </a>
    </div>
    <div class="nouvelles">
        
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<?php endwhile; // Fermeture de la boucle ?>


</body>


<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, nous n'arrivons pas à voir la page demandée</h2>
	<img src="https://i.giphy.com/media/l0HU20BZ6LbSEITza/giphy.webp" alt="Page invisible">
<?php endif; ?>


<?php
// Appel le fichier footer.php
get_footer(); ?>

</html>