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
        <div class="slogan">
            <div class="mot1"><h2>Sensibiliser</h2></div>
            <div class="mot2"><h2>Mobiliser</h2></div>
            <div class="mot3"><h2>Agir</h2></div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="imageBanniere" src="https://i.imgur.com/KNdoYch.jpg">
                </div> 
                <div class="swiper-slide">
                    <img class="imageBanniere" src="https://i.imgur.com/Kw4xspw.jpg">
                </div> 
                <div class="swiper-slide">
                    <img class="imageBanniere" src="https://i.imgur.com/UUfJZ6H.jpg">
                </div> 
                <div class="swiper-slide">
                    <img class="imageBanniere" src="https://i.imgur.com/8SxTDzB.jpg">
                </div> 
                <div class="swiper-slide">
                    <img class="imageBanniere" src="https://i.imgur.com/zt3WwOq.jpg">
                </div> 
            </div> 
        </div> 
        
        
    </div>

    <div class="resume">
        <img class="imageResume accueil" src="https://i.imgur.com/uyiu3Au.jpg">
        <div class="descriptionResume">
            <p>Depuis 1981, Nature Québec mène des projets touchant à la biodiversité, la forêt, l’énergie et le climat, ainsi que l’environnement urbain. Nature Québec sensibilise, mobilise et agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète.</p> 
        </div>
        <div class="fondProduit"><p>Depuis 1981, Nature Québec mène des projets touchant à la biodiversité, la forêt, l’énergie et le climat, ainsi que l’environnement urbain. Nature Québec sensibilise, mobilise et agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète.</p> </div>
        <a class="boutonPageMission" href="https://naturequebec.doubleryle.com/nq/mission/" target="_blank">Découvrez Nature Québec </a>

    <div class="projets accueil">
        <a href="https://naturequebec.doubleryle.com/nq/projets/#sectionEnvironnementSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_environnement') ?>">
            <img src="<?php the_field('image_environnement') ?>">
            <h3><?php the_field('titre_environnement') ?></h3>
        </a>
        <a href="https://naturequebec.doubleryle.com/nq/projets/#sectionForetSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_foret') ?>">
            <img src="<?php the_field('image_foret') ?>">
            <h3><?php the_field('titre_foret') ?></h3>
        </a>
        <a href="https://naturequebec.doubleryle.com/nq/projets/#sectionBiodiversiteSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_biodiversite') ?>">
            <img src="<?php the_field('image_biodiversite') ?>">
            <h3><?php the_field('titre_biodiversite') ?></h3>
        </a>
        <a href="https://naturequebec.doubleryle.com/nq/projets/#sectionEnergieSautDePage" class="iconeProjets" style="background-color: <?php the_field('couleur_energie') ?>">
            <img src="<?php the_field('image_energie') ?>">
            <h3><?php the_field('titre_energie') ?></h3>
        </a>
    </div>

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

    <div class="nouvelles">
        <div class="pt-cv-wrapper">
            <div class="pt-cv-view pt-cv-grid pt-cv-colsys" id="pt-cv-view-acc5d10ba4">
                    <div data-id="pt-cv-page-1" class="pt-cv-page" data-cvc="3">
        <?php
        $arguments = array( // 👈 Tableau d'arguments
            'post_type' => 'nouvelle',
            'posts_per_page' => 3
        );
        $nouvelles = new WP_Query($arguments); // 👈 Utilisation
        while ($nouvelles->have_posts()) : $nouvelles->the_post(); 
        ?>
            <div class="col-md-4 col-sm-4 col-xs-12 pt-cv-content-item pt-cv-1-col">
                <div class="pt-cv-ifield">
                    <a href="<?php echo get_the_permalink() ?>" class="_self pt-cv-href-thumbnail pt-cv-thumb-default" target="_self"> 
                        <?php the_post_thumbnail('medium', array( 'class' => 'pt-cv-thumbnail img-none no-lazyload cvplazy' )) ?>
                    </a>
                    <h4 class="pt-cv-title">
                        <a href="<?php echo get_the_permalink() ?>" class="_self" target="_self"><?php the_field("titre");?></a>
                    </h4>
                    <div class="pt-cv-content">
                        <a href="<?php echo get_the_permalink() ?>" class="_self pt-cv-readmore btn btn-success" target="_self">LIRE LA NOUVELLE</a>
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

    <div class="donation">
        <div class="blocTexteDon">
            <h3>Pourquoi faire un don?</h3>
            <div class="paragrapheDroite">
                <p>En donnant à Nature Québec, vous donnez les 
                moyens à une équipe passionnée de lutter pour la 
                conservation des milieux naturels et des espèces, 
                ainsi que pour l’utilisation durable des ressources 
                sur le territoire québécois. Vous faites le bon 
                choix en priorisant ce qui compte vraiment, le don 
                d’une belle planète à la future génération.
                </p>
                <button class="jeDonne"><a href="https://www.jedonneenligne.org/naturequebec/" target="_blank">JE DONNE</a></button>
            </div>
        </div>  
    </div>

    <div class="temoignage">
        
        <img class="fondTemoignage" src="<?php the_field('fond_temoignage') ?>">
        <div class="blocTemoignage">
            <div class="imageTemoignage">
                <img src="<?php the_field('image_temoignage') ?>">
            </div>
            <div class="texteTemoignage">
                <p><?php the_field('texte_temoignage') ?></p> 
                <h4><?php the_field('nom_temoignage') ?></h6>
            </div>
        </div>

    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
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