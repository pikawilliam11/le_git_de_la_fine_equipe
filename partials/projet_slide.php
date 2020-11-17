<div class="swiper-slide">
    <div class="fondSlider">
        <img src="<?php the_field('image_projet_enfant') ?>">
    </div>
    <div class="contenuProjets" data-swiper-parallax="-700">
        <div class="blocTexteProjet">
            <h3>
                <?php the_title(); ?>
            </h3>
            <?php the_content(); ?>
            <button class="btn_projet">VOIR LE PROJET</button>
        </div>
        <img class="imageProjetEnfant" src="<?php the_field('image_projet_enfant') ?>"> 	
    </div>
</div>