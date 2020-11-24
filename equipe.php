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
</head>
<body>
	
</body>
</html>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>