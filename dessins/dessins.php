<?php   
include '../inc/head.php';
include '../inc/header.php'
?> 

<!--/--------------------------------------ouverture du menu------------------------------------------/-->

    <nav class="d-none" id="myDIV">
        <ul>
            <li><a href="<?=  BASE.'index.php' ;?> ">Accueil</a></li>
            <li><a href="<?=  BASE.'projet/indexProjet.php' ;?> ">Projets</a></li>
            <li><a href="<?=  BASE.'dessins/indexDessins.php' ;?>">Mes dessins</a></li>
            <li><a href="<?=  BASE.'contact/indexContact.php' ;?>">Contact</a></li>
        </ul>
    </nav>

<!--/--------------------------- titre ----------------------------------/-->

    <section class='titre'>
        <h1>
        ~ Mes Dessins ~
        </h1>
    </section>

<!--/--------------------------- Dessins ----------------------------------/-->

    <section class="container-img">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/cheval.webp' ;?>" alt="Dessin cheval">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/femme2.webp' ;?>" alt="Dessin femme et papillon">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/femme1.webp' ;?>" alt="Dessin femme ">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/femme3.webp' ;?>" alt="Dessin femme ">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/fee.webp' ;?>" alt="Dessin fée">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/IMG_4379.webp' ;?>" alt="Dessin requin">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/lola et Mathilde.webp' ;?>" alt="Dessin Lola et Mathilde">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/lionne.webp' ;?>" alt="Dessin lionne">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/ocilia1.webp' ;?>" alt="Dessin Ocilia">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/lola.webp' ;?>" alt="Dessin Lola">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/ocilia2.webp' ;?>" alt="Dessin Ocilia">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/orque.webp' ;?>" alt="Dessin orque">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/papillonrouge.webp' ;?>" alt="Dessin papillon rouge">
        <img class="col-xl-4 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/papillonorange.webp';?>" alt="Dessin papillon orange">
        <img class="col-xl-3 col-lg-5 col-10 IMG" src="<?=  BASE.'assets/img/reinedesneige.webp' ;?>" alt="Dessin reine des neiges">
    </section>
</main>    

<?php   
include '../inc/footer.php';
?>