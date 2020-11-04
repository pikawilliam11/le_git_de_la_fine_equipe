<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

	<?php 
      wp_enqueue_style( "style_footer.css", get_stylesheet_directory_uri(). '/style_footer.css', array(), time(), false );
    ?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
    <meta charset="UTF-8">
    </head>
	
	<body>  
	<div class="footer">
		<img src="nq_dark theme.png" alt="logo_nature_quebec" class="logo_footer">
		<p class="copyright"></p>
		<p class="adresse"></p>
		<div class="media">
			<img src="iconfinder_Circled_Facebook_svg_blanc.svg" alt="logo_facebook" class="facebook icone">
			<img src="iconfinder_Circled_Instagram_svg_blanc.svg" alt="logo_twitter" class="twitter icone">
			<img src="iconfinder_Circled_Twitter_svg_blanc.svg" alt="logo_instagram" class="instagram icone">
			<img src="iconfinder_Circled_Youtube_svg_blanc.svg" alt="logo_youtube" class="youtube icone">
		</div>
	
		
			<button class="donner">JE DONNE</button>
		
		<div class="flavorText">
    		Une réalisation de LA FINE ÉQUIPE™
  		</div>
  	</div>
	</body> 
</html>


<?php wp_footer(); 
/* Espace où Wordpress peiut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

