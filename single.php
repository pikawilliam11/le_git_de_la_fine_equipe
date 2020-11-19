<?php
/**
 * Modèle permettant d'afficher un article (Post).
 */

// Appel le fichier header.php
get_header(); 

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>


	<article>
		<h2>
			<?php the_title(); 
			/* Titre de l'article */ ?>
		</h2>
		<div class="contenu">
			<div class="colonne_droite <?php if(get_field('actif')) {  ?> actif <?php } ?> " style="background-color: <?php the_field('couleur_fond') ?>">
				<?php the_field("autre_nom") ?> </br>
				<?php the_field("pays_dorigine") ?> 
				<p><?php the_field("annees_actives_depuis") ?></p>
				<p><?php the_field("labels") ?></p>
				<a href="<?php the_field('site_officiel') ?>">Site web</a>
				<img src="<?php the_field('logo') ?>"> 
			</div>
			<?php the_content(); 
			/* Affiche le contenu principal de l'article */ ?>
			<div class="wp-block-contact-form-7-contact-form-selector">
				
			</div>
		</div>
		<?php get_template_part( 'partials/metas' ); 
		// Appel le fichier metas.php dans le dossier partials ?>
	</article>

	<script>
		fetch("/wordpress/wp-json/wp/v2/posts/<?php the_ID(); ?>")
			.then(response => response.json())
			.then(data => console.log(data));

	</script>
<?php endwhile; // Fermeture de la boucle ?>

		
<?php
	/* comments_open() valide si nous authorisons les commentaires 
		 '0' != get_comments_number() valide si il y a au moins un commentaire
		 Si l'une des précédentes conditions est vraie, nous affichons le template de commentaires par défaut de Wordpress
	*/ 
	if ( comments_open() || '0' != get_comments_number() ) {
		comments_template( '', true );
	}
?>


<?php else : // Si aucun article correspondant n'a été trouvé ?>
	<h2>Oh oh, aucun article n'a été trouvé</h2>
	<img src="https://media.giphy.com/media/ZYX2ZNBPHmlmfc7Fcj/giphy.gif" alt="Aucun billet trouvé">
<?php endif; 


// Appel le fichier footer.php
get_footer(); ?>
