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
	<div class="banniere equipe">
        <h1 class="titrePage equipe">Équipe et conseil d’administration | Nature Québec</h1>
        <img class="image banniere equipe" src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/banniere-equipe.jpg">
	</div>
	<div class="blocTexte equipe">
        <p>Nature Québec peut compter sur l’appui de partenaires financiers. Ceux-ci permettent d’intervenir dans les différents axes de sa mission. Nous les remercions. Merci de faire une différence!</p>
    </div>

	<?php /*
		$nomMembre = the_field('nom_du_membre');
		$titreMembre = the_field('titre_du_membre');
		$telephoneMembre = the_field('telephone_du_membre');
		$photoMembre = get_field('photo_du_membre');
  		$urlMembre = $photoMembre['url'];
		$altMembre = $photoMembre['alt'];
		$courrielMembre = the_field('courriel_du_membre');

		for($x=0;$x<$nomMembre;$x++) {
  			echo '<div class="container-fluid wrapper1">
			  <div class="row">
				  <div class="col-md-6 d-flex justify-content-center">
					  <div class="equipeWrapper">
						  <img src='$urlMembre[$x]' alt='$photoMembre[$x]' class="imgEquipe img-fluid">
						  <div class="nom">'$nomMembre[$x]'</div>
						  <div class="titre">'$titreMembre[$x]'</div>
						  <div class="contactPhone">'$telephoneMembre'</div>
						  <div class="contactEmail"><a href="mailto:'$courrielMembre[$x]'>Contacter</a></div>
					  </div>
					</div>
			  	</div>
			</div>';
 		 }
	*/?>

	<!--<div class="container-fluid wrapper1">
	<div class="row">
		<div class="col-md-6 d-flex justify-content-center">
			<div class="equipeWrapper">
				<img src="https://naturequebec.org/wp-content/uploads/2019/11/Alice_Anne_Simard-700x700.png" alt="Membre de l'équipe" class="imgEquipe img-fluid">
				<div class="nom">Alice-Anne Simard</div>
				<div class="titre">Directrice générale</div>
				<div class="contactPhone">418 648-2104 poste 2071</div>
				<div class="contactEmail"><a href="mailto:alice-anne.simard@naturequebec.org">Contacter</a></div>
			</div>
		</div>
		<div class="col-md-6 d-flex justify-content-center">
			<div class="equipeWrapper">
				<img src="https://naturequebec.org/wp-content/uploads/2019/11/Alice_Anne_Simard-700x700.png" alt="Membre de l'équipe" class="imgEquipe img-fluid">
				<div class="nom">Alice-Anne Simard</div>
				<div class="titre">Directrice générale</div>
				<div class="contactPhone">418 648-2104 poste 2071</div>
				<div class="contactEmail"><a href="mailto:alice-anne.simard@naturequebec.org">Contacter</a></div>
			</div>
		</div>
	</div>
	</div>-->

	<div class="container-fluid wrapper2">
		<h1 class="conseilHeader">CONSEIL D’ADMINISTRATION</h1>
		<div class="conseilWrapper">
			<div class="row">
				<div class="col-sm-4">
					<img src="https://naturequebec.org/wp-content/uploads/2019/11/Alice_Anne_Simard-700x700.png" alt="Membre du conseil" class="imgConseil img-fluid">
					<div class="conseilNom">Louise Gratton</div>
					<div class="conseilTitre">Présidente</div>
					<div class="conseilRepresente">Représentante des membres individuels</div>
					</div>
				<div class="col-sm-4">
					<img src="https://naturequebec.org/wp-content/uploads/2019/11/Alice_Anne_Simard-700x700.png" alt="Membre du conseil" class="imgConseil img-fluid">
					<div class="conseilNom">Louise Gratton</div>
					<div class="conseilTitre">Présidente</div>
					<div class="conseilRepresente">Représentante des membres individuels</div>
					</div>
				<div class="col-sm-4">
					<img src="https://naturequebec.org/wp-content/uploads/2019/11/Alice_Anne_Simard-700x700.png" alt="Membre du conseil" class="imgConseil img-fluid">
					<div class="conseilNom">Louise Gratton</div>
					<div class="conseilTitre">Présidente</div>
					<div class="conseilRepresente">Représentante des membres individuels</div>
				</div>
			</div>
		</div>
	</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

</body>
</html>

<?php
// Appel le fichier footer.php
get_footer(); ?>