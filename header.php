<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à Wordpress et aux plugins d'instancier des fichier css et js dans le <head>
	 Supprimer cette fonction briserait des plugins et fonctionnalité de Wordpress. 
	 À la limite vous pouvez la déplacer, mais gardez là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

	<?php 
      wp_enqueue_style( "stylesheet_header.css", get_stylesheet_directory_uri(). '/stylesheet_header.css', array(), time(), false );
      wp_enqueue_script( "script_header.js", get_stylesheet_directory_uri() . '/script_header.js', array(), ”, false );
    ?>

<header>

	<nav class="navbarColor">
		
		<img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/nq.png" alt="logo" class="headerLogo">
  			<div class="btnWrapper">
				<!--<a href="#"></a>-->
				<button class="btnDonation"><a href="https://www.jedonneenligne.org/naturequebec/" target="_blank">JE DONNE</a></button>
  			</div>
		<img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/hamburger.png" alt="menu-hamburger" class="hamburger" id="hamburger">
	</nav>

	<div class="bgAlpha">
		<div class="menu-wrapper">
			<a href="">Projets</a>
			<a href="">Campagnes</a>
			<a href="">Histoire</a>
			<a href="">Mission</a>
			<a href="">Équipe</a>
				<div class="menu-social">
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
				<button class="headerDonner"><a href="https://www.jedonneenligne.org/naturequebec/" target="_blank">JE DONNE</a></button>
					<div class="sous-menu">
						<a href="">Nouvelles</a>
						<a href="">Partenaires</a>
						<a href="">Contact</a>
					</div>       
		</div>
	</div>
	<?php 
			// Affiche un menu si dans le tableau de bord un menu à été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		?>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin Wordpress
		//bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
