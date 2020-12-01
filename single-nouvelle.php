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
        
    <div class="partie2">
      <img src="<?php the_field('image1'); ?>" alt="" class="Image un">
      <div class="texte block1"> <?php the_field('texte1'); ?> </div>
    </div>
    
    <div class="partie3">
      <img src="<?php the_field('image2'); ?>" alt="" class="Image deux"> 
      <div class="texte block2"> <?php the_field('texte2'); ?> </div>
    </div> 
    
    <div class="partie4">
      <img src="<?php the_field('image3'); ?>" alt="" class="Image trois"> 
      <div class="texte block3"> <?php the_field('texte3'); ?> </div>
    </div>
        

  </div> 
     
    <div class="auteurs">
      <div class="auteur1">
        <img src="<?php the_field('image_auteur'); ?>" alt="" class="ImageAut1">
        <div class="nomAuteur1"> <?php the_field('nom_auteur'); ?> </div>
      </div>

      <div class="auteur2">
        <img src="<?php the_field('image_auteur_2'); ?>" alt="" class="ImageAut2">
        <div class="nomAuteur2"> <?php the_field('nom_auteur_2'); ?> </div> 
      </div>
    </div>           
</body>

<?php

// Appel le fichier footer.php
get_footer(); ?>

</html>