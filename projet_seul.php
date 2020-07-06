<?php

  include "config.php";

  $projet_a_afficher = $bdd -> query(
    "SELECT titre, texte, lien_image_1, annee, client, lien
    FROM projet
    WHERE id_projet = '$_GET[lien_projet]'")
   -> fetch();

  $techno_a_afficher = $bdd -> query(
    "SELECT nom_techno
    FROM technologie, projet_technologie, projet
    WHERE technologie.id_techno = projet_technologie.techno_id
    AND projet.id_projet = ($_GET[lien_projet])
    AND projet_technologie.projet_id = projet.id_projet")
    -> fetchAll();

  include PATH_TEMPLATE . "page_projet_seul.php";
?>
