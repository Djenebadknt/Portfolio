<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $dest = "Djeneba.dknt@hotmail.com";
    $sujet = "Nouveau message depuis ton site portfolio";
    $contenu = "Nom : $nom\nEmail : $email\nMessage :\n$message";

    mail($dest, $sujet, $contenu);

    echo "Message envoyé !";
}
?>
