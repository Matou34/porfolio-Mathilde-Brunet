<?php   
include './inc/head.php';
include './inc/header.php'
?>

<!--/----------------------------------------Contenu du menu------------------------------------------/-->

<nav class="d-none " id="myDIV">
        <ul>
            <li><a href="<?=  BASE.'index.php' ;?> ">Accueil</a></li>
            <li><a href="<?=  BASE.'projet/indexProjet.php' ;?> ">Projets</a></li>
            <li><a href="<?=  BASE.'dessins/indexDessins.php' ;?>">Mes dessins</a></li>
            <li><a href="<?=  BASE.'contact/indexContact.php' ;?>">Contact</a></li>
        </ul>
    </nav>



<!--/---------------------------------------Mathilde Brunet------------------------------------------/-->
<div class="container-T row">
        <section class="Container-nomPrenom col-12 col-lg-6 ">
            <p class="nomPrenom taille">
                <span class="ChangeColor animated" style="opacity: 1;">M</span>
                <span class="ChangeColor animated" style="opacity: 1;">a</span>
                <span class="ChangeColor animated" style="opacity: 1;">t</span>
                <span class="ChangeColor animated" style="opacity: 1;">h</span>
                <span class="ChangeColor animated" style="opacity: 1;">i</span>
                <span class="ChangeColor animated" style="opacity: 1;">l</span>
                <span class="ChangeColor animated" style="opacity: 1;">d</span>
                <span class="ChangeColor animated" style="opacity: 1;">e</span>
            </p>

            <p class="nomPrenom container-nom taille">
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">B</span>
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">r</span>
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">u</span>
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">n</span>
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">e</span>
                <span class="ChangeColor animated" id="nom" style="opacity: 1;">t</span>
            </p>

            <h1 class="nomPrenom ChangeColor">Développeur Web</h1>
        </section>

        <section class="container-img col-12 col-lg-6" id="ImG">
            <figure>
                <img class='img' src="<?=  BASE.'/assets/img/IMG_2123.JPG' ;?>"  alt="Mathilde & Lola(cheval)">
            </figure>
        </section>


<!--/-------------------------------------------description-------------------------------------------/-->
        <footer class="description">
            <p class='footerDesc'>
                "Passionné par le développement web, je suis à la recherche d'une opportunité d'alternance pour mettre en avant ma créativité,<br>
                ma positivité, et ma rigueur. Maîtrisant HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, SQL, ainsi que les bases <br>
                de données. De plus, je suis à l'aise avec Figma, Illustrator et Photoshop. Mon <br>
                désir de travailler en équipe et mon souhait constant de progresser font de moi un atout précieux pour tout projet web. <br>
                Prête à apporter mes compétences pour garantir le succès de votre entreprise."        
            </p>
        </footer>
    </div>
</main>

<?php   
include './inc/footer.php';
?>
