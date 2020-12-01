<?php
/**
 * Template Name: contact.
 */

// Appel le fichier header.php
get_header(); 

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php 
	wp_enqueue_style( "style_contact.css", get_stylesheet_directory_uri(). '/style_contact.css', array(), time(), false );
	wp_enqueue_script( "script_contact.js", get_stylesheet_directory_uri() . '/script_contact.js', array(), ”, false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="banniere equipe">
    <h1 class="titrePage equipe">Nous contacter | Nature Québec</h1>
    <img class="image banniere equipe" src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/banniere-contact.jpg">
</div>

<div class="container">
<div class="textInfo">Vous avez des questions ou des commentaires? Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible.</div>
	<div class="wrapperContact d-flex justify-content-center flex-fill">
<?php 
	the_content();
?>
	</div>
</div>
<!--<div class="container">
<div class="textInfo">Vous avez des questions ou des commentaires? Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible.</div>
  	<section ng-app="myApp" ng-controller="RegistrationController">
  		<form name="myForm" ng-submit="register()" action="/contact.php" method="post">
    		<fieldset>
      			<div class="inputWrapper d-flex flex-column">
      				<div class="wrapper0 order-0">
      					<input type="text" name="firstname" 
							placeholder="Votre prénom"
							ng-model="user.firstname"
							ng-minlength="2"
							ng-required="true"
							ng-pattern="/^[a-zA-Z]*$/">
        						<p class="error validationerror" ng-show="myform.firstname.$invalid && myform.firstname.$touched"></p>
        			</div>
				<div class="wrapper1 order-1">
					<input type="text" name="lastname"
						placeholder="Votre nom" 
						ng-model="user.lastname"
						ng-minlength="2"
						ng-required="true"
						ng-pattern="/^[a-zA-Z]*$/">
						<p class="error validationerror order-1" ng-show="myform.lastname.$invalid && myform.lastname.$touched"></p>
				</div>
        		<div class="wrapper2 order-4">
      				<input type="text" name="subject" placeholder="Votre sujet" ng-model="user.subject" ng-minlength="3" ng-required="true" ng-pattern="/^[a-zA-Z]*$/"><p class="error validationerror" ng-show="myform.subject.$invalid && myform.subject.$touched"></p>
      			</div>
					<div class="wrapper5 order-3 d-flex">
						<div class="form-group flex-fill">
						<select class="form-control" id="raisonSelect" ng-model="user.raison" ng-required="true" name="raisonSelect">
							<option value="" disabled selected>Sélectionner une raison</option>
							<option>J'ai une question</option>
							<option>Je souhaite devenir partenaire</option>
							<option>Il y a une erreur sur votre site web</option>
							<option>Je souhaite rejoindre votre équipe</option>
							<option>Autre raison</option>
						</select>
					</div>
        		</div>
        		<div class="wrapper3 order-5">
     				<div class="messageWrapper d-flex justify-content-center">
						<textarea name="textareaMessage" id="textareaMessage" cols="50" rows="10" placeholder="Votre message" class="flex-fill p-3"></textarea>
					</div>
      			</div>
        		<div class="wrapper4 order-2">
					<input type="email" name="email"
						placeholder="Votre adresse courriel" 
						ng-model="user.email"
						ng-required="true">
						<p class="error validationerror" ng-show="myform.email.$invalid && myform.email.$touched"></p>
				</div>
      			</div>
    		</fieldset>
    		<div class="btnWrapper d-flex justify-content-center">
      			<button type="submit" class="btn myBtn" ng-disabled="myForm.$invalid" name="submit">Envoyer</button>
    		</div>
  		</form>
    </section>
</div>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>	
</body>
</html>

<?php 
	if(isset($_POST['submit'])){
		$to = "cashwilliam@hotmail.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$subject = $_POST['raisonSelect'];
		$subject2 = "Copie de votre courriel";
		$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
		$message2 = "Voici la copie de votre message " . $first_name . "\n\n" . $_POST['message'];
	
		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		wp_mail($to,$subject,$message,$headers);
		wp_mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		//echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		// You can also use header('Location: thank_you.php'); to redirect to another page.
		}
?>

<?php endwhile; // Fermeture de la boucle ?>

<?php else : // Si aucune page correspondante n'a été trouvée ?>
	<h2>Oh oh, la page recherchée est disparue</h2>
	<img src="https://i.giphy.com/media/3o8doR2qGIXQDGCVoY/giphy.webp" alt="Page disparue">
<?php endif; 

// Appel le fichier footer.php
get_footer(); ?>