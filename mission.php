<?php 
  /*Template Name: Mission*/
?>

<?php

  // Appel le fichier header.php
  get_header(); 
  ?>

<?php 
	wp_enqueue_style( "mission.css", get_stylesheet_directory_uri(). '/mission.css', array(), time(), false );
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
    <title>Mission</title>
</head>
<div class="banniereJay">
    <img src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/lac-scaled.jpg" alt="imageBanniere" class="imageBanniere">
    <div class="banniereTitre">
      Mission | Nature Québec
    </div>
    <div class="decouvrir">
      <div class="decouvrirTexte">
        Vous voulez en savoir plus sur Nature Québec? Téléchargez notre dépliant explicatif pour connaitre nos 4 grands domaines d’action.
     </div>
    <div class="enteteValeur">
        <a class="savoir" href="https://naturequebec.org/wp-content/uploads/2020/07/Depliant_NQ-1.pdf" target="_blank" >En savoir plus</a>
    </div> 
  </div>
 </div>
  
  <div class="aPropos">
      <img src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/equipe.jpg" alt="imagePropos" class="imagePropos">

    <div class="proposTexte"> 
      <h3>À Propos de Nature Québec</h3>
      Nature Québec  oeuvre activement à la conservation des milieux naturels et à l’utilisation durable des ressources sur le territoire québécois.
Depuis 1981, Nature Québec privilégie une approche globale connectée aux grands enjeux planétaires liés au climat et à la biodiversité. Localement, Nature Québec mène des campagnes et des projets sur la biodiversité, la forêt, l’énergie et le climat, et ce, d’Anticosti jusqu’au coeur de nos villes.
Nature Québec bénéficie d’une équipe de professionnels, appuyée par un réseau d’organismes affiliés et de chercheurs-collaborateurs qui lui confèrent une crédibilité reconnue dans ses domaines d’intervention.
Nature Québec souscrit aux objectifs de la Stratégie mondiale de conservation de l’Union internationale pour la conservation de la nature (UICN), dont il est membre.
    </div>
  </div>
  
 <div class="grouperTerciere">
    <img src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/sous-leau-scaled.jpg" alt="laBonneEau" class="imageVisionMission">
    
    
    <div class="vision">
      <div class="imageVision">
        <img src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/oeil.png" alt="oeil" class="oeil">
      </div>
      <div class="visionTexte">
        <h3>Notre Vision</h3>     
        Nature Québec agit en vue d’une société plus juste, à faible empreinte écologique et climatique, solidaire du reste de la planète. L’organisme oriente ses actions pour que le Québec aime ses milieux naturels, en ville comme en région, les protège et les reconnaisse comme essentiels à son épanouissement.
      </div>
    </div>
    
    <div class="action">
      <div class="imageAction">
        <img src="https://naturequebec.doubleryle.com/nq/wp-content/uploads/2020/11/cible.png" alt="cible" class="cible">
      </div>
      <div class="actionTexte">
        <h3>Nos Actions</h3>
        Nature Québec encourage la mobilisation citoyenne, intervient dans le débat public, informe, sensibilise et réalise des projets afin que notre société:
        <br>
        - Valorise la biodiversité
        <br>
        – Protège les milieux naturels et les espèces
        <br>
        – Favorise le contact avec la nature
        <br>
        – Utilise de façon durable les ressources
      </div>
    </div>
</div>


<?php

// Appel le fichier footer.php
get_footer(); ?>

</html>