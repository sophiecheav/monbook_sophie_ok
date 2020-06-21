<?php

include "../../config.php";
include "../include/entete.php";

proteger_page();

if (!isset($_GET["projetASupprimer"])) {
  ajouterErreur("Merci de choisir un projet à supprimer");
} else {
  $bdd -> query("DELETE FROM projet WHERE id_projet = " . $_GET["projetASupprimer"]);
  ajouterSuccess("Le projet a été supprimé");
}

changeDePage(BOOK_URL_SITE . "admin/projets/projet_liste.php");
