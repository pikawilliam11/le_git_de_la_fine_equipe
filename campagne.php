<?php 
/**
 * 	Template Name: Campagnes
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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css">
	
    <title>Campagnes</title>
</head>
<body>
    
    <h1 class="titreNouvelles">Campagnes | Nature Québec</h1>

    <div class="nouvelles">
        <?php //echo do_shortcode("[pt_view id=228c9c4mjt]"); ?>
        <?php echo do_shortcode("[pt_view id=85b7f5bwuj]"); ?>
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