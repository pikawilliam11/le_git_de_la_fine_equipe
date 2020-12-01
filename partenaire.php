<?php 
  /*Template Name: Partenaire*/
?>

<?php

  // Appel le fichier header.php
  get_header(); 
  ?>

<?php 
	wp_enqueue_style( "stylesheet_partenaire.css", get_stylesheet_directory_uri(). '/stylesheet_partenaire.css', array(), time(), false );
	wp_enqueue_script( "script_partenaire.js", get_stylesheet_directory_uri() . '/script_partenaire.js', array(), ”, false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.typekit.net/rcw0dji.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Partenaires</title>
</head>
<body>

  <div class="banniere partenaire">
    <h1 class="titrePage"><?php the_field('titre_page') ?></h1>
    <img class="image banniere partenaire" src="<?php the_field('image_banniere') ?>">
  </div>
  <div class="blocTexte partenaire">
      <p><?php the_field('bloc_texte') ?></p>
    <a class="devenirMembre" href="https://naturequebec.doubleryle.com/nq/contact/" target="_blank">Devenir membre</a>
  </div>
  
  
  <div id="demo" class="carousel slide" data-ride="carousel">
    
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <a class="col-3" href="https://cmquebec.qc.ca/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/communaute_metropolitaine_qc-1.png" alt="communaute_metro_qc">
          </a>
          <a class="col-3" href="http://www.faqdd.qc.ca/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/FAQDD1-1.png" alt="fond_action">
          </a>
          <a class="col-3" href="https://caissesolidaire.coop/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/desjardins-1.png" alt="desjardins">
          </a>
          <a class="col-3" href="http://www.environnement.gouv.qc.ca/cgfv/Fonds-vert.htm" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/fondvert-1.png" alt="fondvert">
          </a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
          <a class="col-3" href="https://www.canada.ca/fr/environnement-changement-climatique.html" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/canada1-1.png" alt="canada">
          </a>
          <a class="col-3" href="https://www.quebec.ca/sante/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/quebec_sante1-1.png" alt="quebec_sante">
          </a>
          <a class="col-3" href="http://www.education.gouv.qc.ca/accueil/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/education_qc-1.png" alt="education_qc">
          </a>
          <a class="col-3" href="https://www.mess.gouv.qc.ca/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/travail_emploi_solidarite_quebec1-1.png" alt="travail_emploi_solidarite_quebec">
          </a>
      </div>
    </div>
      <div class="carousel-item">
      <div class="row">
        <a class="col-3" href="https://pessamit.org/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/innus-1.png" alt="innus">
          </a>
          <a class="col-3" href="https://tjl.quebec/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/trudel1-1.png" alt="trudel">
          </a>
          <a class="col-3" href="https://www.intact.ca/fr/assurance-particuliers.html" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/intact1-1.png" alt="intact">
          </a>
          <a class="col-3" href="https://www.sepaq.com/" target="_blank">
            <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/sepaq-1.png" alt="sepaq">
          </a>
      </div>
    </div>
  </div>
    
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
    
</div>
  
  
  
  <div class="organismesAffiliees">
    <div class="listeOrganismesTotale">
      <div class="fondListe">
        <div class="texteOrganisme">
      <h2 class="sousTitre">Organismes affiliés</h2>
      <div class="blocTexteListe">
        <p>Par leur adhésion formelle, nos organismes affiliés forment la base démocratique et la vie associative. Nous leur en sommes très reconnaissants!</p>    
      </div>
    </div>
        
        <img src="https://naturequebec.go.yj.fr/wp-content/uploads/2020/11/louis-etienne-foy-SV-dNI53WpU-unsplash-scaled.jpg" alt="imageFond">
        <ul class="listeOrganismes">
        <li>Les AmiEs de la Terre de Québec</li>
        <li>Amis du parc national des Îles-de-Boucherville</li>
        <li>Association Communautaire du Lac Malaga</li>
        <li>Association Loisirs et Plein Air des Marais inc (Zec Lac au Sable)</li>
        <li>Association pour la protection de l’environnement du lac Saint-Charles et des marais du Nord</li>
        <li>Association pour la protection des milieux humides de la Cumberland</li>
        <li>Association pour la protection du Lac Taureau Inc (APLT)</li>
        <li>Association québécoise d’interprétation du patrimoine</li>
        <li>Association québécoise pour la maîtrise de l’énergie</li>
        <li>Aventure Écotourisme Québec</li>
        <li>Boisé des Douze</li>
        <li>Boréalisation</li>
        <li>Centre d’intendance écologique Latreille (CIEL)</li>
        <li>Centre québécois du droit de l’environnement</li>
        <li>Club des ornithologues de la Gaspésie</li>
        <li>Club des ornithologues de Québec</li>
        <li>Comité ZIP Gaspésie</li>
        <li>Conseil régional de l’environnement Chaudière-Appalaches</li>
        <li>Conseil régional de l’environnement du Bas-Saint-Laurent</li>
        <li>Conseil régional de l’environnement Laval</li>
        <li>Corridor appalachien</li>
        <li>Fondation Rivières</li>
        <li>Groupe d’éducation et d’écosurveillance de l’eau</li>
        <li>Groupe d’initiatives et de recherche appliquées au milieu marin</li>
        <li>Groupe de recherche et d’éducation sur les mammifères marins</li>
        <li>Les Amis de la Forêt seigneuriale Joly de Lotbinière</li>
        <li>Les amis de la montagne (Mont-Royal) inc.</li>
        <li>Mouvement écologique du comté de Richelieu</li>
        <li>Nature-Action Québec</li>
        <li>Organisme de bassin versant de la Yamaska</li>
        <li>Réseau de milieux naturels protégés</li>
        <li>Société de protection foncière de Sainte-Adèle</li>
        <li>Société des établissements de plein air du Québec</li>
        <li>Société Provancher d’histoire naturelle du Canada</li>
        <li>Univert Laval</li>
        <li>Zecs Québec</li>
      </ul>
      </div>
      </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js"></script>
</body>

<?php

// Appel le fichier footer.php
get_footer(); ?>

</html>