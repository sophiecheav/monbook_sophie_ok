<?php
include "fonctions_utiles.php";

session_start();

$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root';
$nomBaseDeDonnees = "monbook_sophie";

//On établit la connexion
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


// Je définis mes constantes / chemins disque dur, url...
define("BOOK_URL_SITE", "http://localhost:8888/formationphp/monbook_sophie_ok/");
// __DIR__ = chemin de mon disque dur jusqu'à mon site web
define("BOOK_PATH_SITE", __DIR__ . "/");

// correspond à $_url_de_base :
define("URL_TEMPLATE", BOOK_URL_SITE . "template/");
// chemin de mon disque dur vers mon template :
define("PATH_TEMPLATE", BOOK_PATH_SITE . "template/");

define("TITRE_SITE", "Sophie Cheav-Seang");


?>
