<?php 
  /*Template Name: templateCampagne*/
?>

<?php

  // Appel le fichier header.php
  get_header(); 
  ?>

<?php 
	wp_enqueue_style( "templateCampagne.css", get_stylesheet_directory_uri(). '/templateCampagne.css', array(), time(), false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Campagne</title>
</head>
<body>

     
     <img src="<?php the_field('image_1'); ?>" alt="" class="Image1">
 
    
    <div class="partie1">
      <div class="sousTitre"> <?php the_field('sous-titre'); ?> </div>
      <div class="texte1"> <?php the_field('texte_1'); ?> </div>
      <img src="<?php the_field('image_2'); ?>" alt="" class="Image2">
    </div>
    
    <div class="partie2"> 
      <div class="texte2"> <?php the_field('texte_2'); ?> </div>
      <img src="<?php the_field('image_3'); ?>" alt="" class="Image3">
    </div>
               
</body>

<?php

// Appel le fichier footer.php
get_footer(); ?>

</html>