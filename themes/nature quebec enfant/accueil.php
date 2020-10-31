<?php
	/*Template Name: Accueil*/
?>

<?php
/**
 * Modèle permettant d'afficher une page.
 */

// Appel le fichier header.php
get_header(); 

?>

	<article>
		<h2>
			<?php the_title(); 
			/* Titre de la page */ ?>
		</h2>

		<?php the_content(); 
		/* Affiche le contenu principal de la page */ ?>
	</article>
<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>