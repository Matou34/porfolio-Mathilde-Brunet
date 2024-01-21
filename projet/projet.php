<?php   
include '../inc/head.php';
include '../inc/header.php'
?>
<!-- Mettre le lien du site quiz -->
<!-- Mettre le lien du site morpion -->

<!--/--------------------------------------ouverture du menu------------------------------------------/-->
    <nav class="d-none test" id="myDIV">
        <ul>
            <li><a href="<?=  BASE.'index.php' ;?> ">Accueil</a></li>
            <li><a href="<?=  BASE.'projet/indexProjet.php' ;?> ">Projets</a></li>
            <li><a href="<?=  BASE.'dessins/indexDessins.php' ;?>">Mes dessins</a></li>
            <li><a href="<?=  BASE.'contact/indexContact.php' ;?>">Contact</a></li>
        </ul>
    </nav>

<!--/--------------------------- titre ----------------------------------/-->

    <div class='titre'>
            <h1>
            ~ Mes Réalisations ~
            </h1>
        </div>

<!--/----------------------------------Description------------------------------------------------/-->

    <div class="container-Card">
        <section class="descriptions">
            <p class="descriptionn">
                Bienvenue sur mon portfolio ! Découvrez ici une sélection de sites web que j'ai créés. Chacun de ces projets reflète ma passion pour la conception numérique, l'innovation et l'excellence. Explorez ces réalisations pour vous inspirer et envisager comment je pourrais contribuer à votre prochain projet. N'hésitez pas à me contacter pour en discuter davantage.
            </p>
        </section>

<!--/---------------------------------- Card ------------------------------------------------/-->

        <div class="wrap">
            <!-- card 1 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-image"></div>
                        <div class="title-flex">
                            <h3 class="box-title">Cv Mathilde Brunet</h3>
                            <p class="user-follow-info">html / css / javascript</p>
                        </div>
                        <p class="description">"Découvrez mon CV, une expérience immersive qui va au-delà du papier traditionnel. Ce site dynamique offre un aperçu complet de mon parcours professionnel, de mes compétences et de mes réalisations."
                        </p>
                </div>
                <a target="_blank" href="https://matou34.github.io/CV_Mathilde_Brunet/" class="button">Visiter Site</a>
            </section>

            <!-- card 2 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-Image"></div>
                    <div class="title-flex">
                        <h3 class="box-title">Calculator</h3>
                        <p class="user-follow-info">html / css / javascript</p>
                    </div>
                    <p class="description">"Voici ma calculatrice : simple, précise et facile à utiliser. Elle réalise les opérations de base et bien plus encore. Testez-la pour simplifier vos calculs au quotidien !"
                    </p>
                </div>
                <a target="_blank" href="https://matou34.github.io/Calculator/" class="button">Visiter Site</a>
            </section>

            <!-- card 3 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-images"></div>
                    <div class="title-flex">
                        <h3 class="box-title">Jeux dragon ball(4 jeux)</h3>
                        <p class="user-follow-info">html / css / javascript</p>
                    </div>
                    <p class="description">
                        "Découvrez mon site captivant dédié à l'univers Dragon Ball, regroupant quatre jeux divertissants. des puzzles stimulants, des quiz passionnants, défiez la chance au jeu classique de chifumi , des duels tactiques avec le célèbre jeu de morpion." 
                    </p>
                </div>
                <a target="_blank" href="#" class="button">Visiter Site</a>
            </section>

            <!-- card- 4 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-Images"></div>
                    <div class="title-flex">
                        <h3 class="box-title">Quiz - Game of thrones</h3>
                        <p class="user-follow-info">html / css / javascript</p>
                    </div>
                    <p class="description">
                        Êtes-vous prêt à relever le défi et à démontrer votre savoir sur Game of Thrones ? Lancez-vous dans le quiz et explorez les profondeurs de Westeros !
                    </p>
                </div>
                <a target="_blank" href="#" class="button">Visiter Site</a>
            </section>

            <!-- card- 5 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-image"></div>
                    <div class="title-flex">
                        <h3 class="box-title">Cv Mathilde Brunet</h3>
                        <p class="user-follow-info">html / css / javascript</p>
                    </div>
                    <p class="description">"Découvrez mon CV, une expérience immersive qui va au-delà du papier traditionnel. Ce site dynamique offre un aperçu complet de mon parcours professionnel, de mes compétences et de mes réalisations."
                    </p>
                </div>
                <a target="_blank" href="https://matou34.github.io/CV_Mathilde_Brunet/" class="button">Visiter Site</a>
            </section>

            <!-- card 6 -->
            <section class="box">
                <div class="box-top">
                    <div class="box-Image"></div>
                    <div class="title-flex">
                        <h3 class="box-title">Calculator</h3>
                        <p class="user-follow-info">html / css / javascript</p>
                    </div>
                    <p class="description">"Voici ma calculatrice : simple, précise et facile à utiliser. Elle réalise les opérations de base et bien plus encore. Testez-la pour simplifier vos calculs au quotidien !"
                    </p>
                </div>
                <a target="_blank" href="https://matou34.github.io/Calculator/" class="button">Visiter Site</a>
            </section>
        </div>
    </div>
</main>    

<?php   
include '../inc/footer.php';
?>