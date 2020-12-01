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
    
    <div class="banniereNouvelles">
        <h1 class="titreNouvelles">Campagnes | Nature Québec</h1>
        <img class="imageBanniere nouvelles" src="<?php the_field('image_banniere') ?>">
    </div>

    <div class="nouvellesCampagnes">
        <div class="pt-cv-wrapper">
            <div class="pt-cv-view pt-cv-grid pt-cv-colsys" id="pt-cv-view-084000f6i9">
                    <div data-id="pt-cv-page-1" class="pt-cv-page" data-cvc="3">
                        <?php
                        $arguments = array( // 👈 Tableau d'arguments
                            'post_type' => 'campagnes',
                            'posts_per_page' => 3
                        );
                        $campagnes = new WP_Query($arguments); // 👈 Utilisation
                        while ($campagnes->have_posts()) : $campagnes->the_post(); 
                        ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 pt-cv-content-item pt-cv-1-col">
                                <div class="pt-cv-ifield">
                                    <a href="<?php echo get_the_permalink() ?>" class="_self pt-cv-href-thumbnail pt-cv-thumb-default" target="_self"> 
                                        <?php the_post_thumbnail('medium', array( 'class' => 'pt-cv-thumbnail img-none no-lazyload cvplazy' )) ?>
                                    </a>
                                    <h4 class="pt-cv-title">
                                        <a href="<?php echo get_the_permalink() ?>" class="_self" target="_self"><?php the_field("sous-titre");?></a>
                                    </h4>
                                    <div class="pt-cv-content">
                                        <a href="<?php echo get_the_permalink() ?>" class="_self pt-cv-readmore btn btn-success" target="_self">VOIR LA CAMPAGNE</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile; 
                        wp_reset_postdata(); 
                        ?>
                  </div>
            </div>
        </div>
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