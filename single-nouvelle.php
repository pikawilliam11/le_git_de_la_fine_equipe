<?php 
  /*Template Name: templateNouvelle*/
?>

<?php

  // Appel le fichier header.php
  get_header(); 
  ?>

<?php 
	wp_enqueue_style( "templateNouvelle.css", get_stylesheet_directory_uri(). '/templateNouvelle.css', array(), time(), false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Nouvelle</title>
</head>
<body>
  
      <div class="partie1">
        <div class="titre"> <?php the_field('titre'); ?> </div>
        <div class="datePublication"> <?php the_field('date_de_publication'); ?> </div>
      </div>
  <div class="essaie">
      <div class="texte"> <?php the_field('texte'); ?> </div>

      <div class="images">
      <img src="<?php the_field('image1'); ?>" alt="" class="Image un">
      <img src="<?php the_field('image2'); ?>" alt="" class="Image deux">
      <img src="<?php the_field('image3'); ?>" alt="" class="Image trois">
      </div>
  </div> 
      <div class="auteur1">
        <img src="<?php the_field('image_auteur'); ?>" alt="" class="ImageAut1">
        <div class="nomAuteur1"> <?php the_field('nom_auteur'); ?> </div>
      </div>

      <div class="auteur2">
        <img src="<?php the_field('image_auteur_2'); ?>" alt="" class="ImageAut2">
        <div class="nomAuteur2"> <?php the_field('nom_auteur_2'); ?> </div> 
      </div>
               
</body>

<?php

// Appel le fichier footer.php
get_footer(); ?>

</html>