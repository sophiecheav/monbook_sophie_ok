<?php
// Cette page reçoit les informations du formulaire qui se trouve sur formulaire_accueil.php

include "../../config.php";

proteger_page(); // on ne peut pas acceder à la page sans être connecté.

if(!empty($_POST)) {
enregistreValeur("TEXTE_ACCUEIL", $_POST["texteAccueil"]);

}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageAccueil"],  "images/autres/portrait.jpg");
}

ajouterSuccess("Nous avons enregistré la page d'accueil");

header("location:" . BOOK_URL_SITE . "admin/accueil_admin.php");
exit;
