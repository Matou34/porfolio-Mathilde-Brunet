<?php
//**********************************changer la meta description

if (isset($_POST['envoi'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

    $to = 'brunetmathilde34@gmail.com';
    $subject = 'Nouveau message de formulaire de contact';
    $messageBody = "Nom: $nom\n\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Téléphone: $tel\n\n";
    $messageBody .= "Message: $message\n\n";

    $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n";
    mail($to, $subject, $messageBody, $headers);
}

$description = '<meta name="description" content="Contactez-moi pour discuter de vos besoins en développement web. En tant que développeuse passionnée, je suis prête à collaborer sur des projets stimulants. Utilisez le formulaire de contact pour me faire part de vos idées, questions ou demandes de collaboration. Ensemble, créons des solutions web innovantes et adaptées à vos besoins.">';

$title = "Portfolio Mathilde Brunet - Contact";

$css = '<link rel="stylesheet" href="../assets/css/contact.css">
        <link rel="stylesheet" href="../assets/css/style.css">';

$js = '<script src="../assets/js/contact.js"  defer></script>
<script src="../assets/js/script.js" defer></script>';



include '../contact/contact.php';