<?php 
include '../inc/head.php';
include '../inc/header.php'
?>


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

    <section class='titre'>
        <h1>
        ~ Contact ~
        </h1>
    </section>


<!--/--------------------------------Contact----------------------------------------------/-->
<div class="container-contact">
    <div class="formulaire2 col-7">
        <p id="Nom">
            Mathilde Brunet
        </p>

        <p>
            Pour me contacter, vous trouverez ci-joint mes coordonnées. 
        </p>

        <ul class="contact2">
            <li class="contact3">
                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <p class="margin">06 73 83 60 38</p>
            </li>
            <li class="contact3">
                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
                <p class="margin">brunetmathilde34@gmail.com</p>
            </li>
            <li class="contact3">
                <i class="fa-solid fa-file fa-1x fa"></i>
                <a target="_blank" href="https://matou34.github.io/CV_Mathilde_Brunet/">
                    <p class="margin">cv</p>
                </a>
            </li>
        </ul>

        <p>
            Vous pouvez aussi me contacter via le formulaire mis à votre disposition.
        </p>
    </div>
<!-- ------------------------------- formulaire ------------------------------- -->
    <div class='formulaire'>
        <form action="contact.php" method="post">
            <div class="titre_form">
                <h2 class="titre-contact">Contact</h2>
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" autocomplete="on" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" id="email" autocomplete="on" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">tel :</label>
                <input type="text" class="form-control" name="tel" id="tel" autocomplete="on" required>
            </div>
            <label for="message">Message :</label>
            <div class="mb-3">
                <textarea class="form-control" id="message" name="message" autocomplete="on"></textarea>
            </div>
            <button type="submit" name="envoi" class="btn">Envoyer</button>
        </form>
    </div>
</div>
</main>    

<?php   
include '../inc/footer.php';
?>