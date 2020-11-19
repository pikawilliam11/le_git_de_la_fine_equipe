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
		
		<div class="combo">
		  <div class="adresse">
       870, avenue De Salaberry Bureau 207 Québec, Qc G1R 2T9
       <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/nq.png" alt="logo_nature_quebec" class="logo">
      </div>
		  <div class="copyright">
        Nature Québec © 2020 Copyright - Tous droits réservés
      </div> 
    </div>
    
    <div class="media">
			<a href="https://www.facebook.com/naturequebec/">
        <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/facebook-1.png" alt="logo_facebook" class="facebook icone">
			</a>
      <a href="https://twitter.com/NatureQuebec?hl=fr-ca">
        <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/twitter-1.png" alt="logo_twitter" class="twitter icone">
			</a>
      <a href="https://www.instagram.com/naturequebec/">
        <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/instagrgam-1.png" alt="logo_instagram" class="instagram icone">
			<a href="https://www.youtube.com/user/NatureQuebec">
        <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/youtube.png" alt="logo_youtube" class="youtube icone">
      </a>
		</div>
		<button class="donner"><a href="https://www.jedonneenligne.org/naturequebec/" target="_blank">JE DONNE</a></button>
		
		<div class="flavorText">
    		Une réalisation de LA FINE ÉQUIPE™
  		</div>
	</div>
		
	

	</div>
	</body> 
</html>


<?php wp_footer(); 
/* Espace où Wordpress peiut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

