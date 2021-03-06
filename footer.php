<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

	<?php 
	   wp_enqueue_style( "style_footer.css", get_stylesheet_directory_uri(). '/style_footer.css', array(), time(), false );
    ?>




	

	<div class="footer">
		
		<div class="combo">
		  <div class="adresse"><a href="https://www.google.com/maps/place/NATURE+QU%C3%89BEC/@46.8057701,-71.229522,17z/data=!3m1!4b1!4m5!3m4!1s0x4cb896796212bdbb:0xa65682f198e5dd99!8m2!3d46.8057701!4d-71.2273333" target="_blank">
       870, avenue De Salaberry Bureau 207 Québec, Qc G1R 2T9</a>
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




<?php wp_footer(); 
/* Espace où Wordpress peiut insérer de fichiers .js et autres pour des plugiciels (plugins) par exemple. 
	 Si vous enlever cette fonction, vous désactiverez du même coups tous vos plugins 🤷. 
	 Vous pouvez toujorus la déplacer, mais garder là */
?>

