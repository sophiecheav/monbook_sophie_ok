<?php
// Cette page reçoit les informations du formulaire qui se trouve sur projet_formulaire.php

include "../../config.php";
include "../include/entete.php";

proteger_page();


// Ajout projet :
if(!empty($_POST)) {

        // sinon on est dans le cas d'une modification :
    if ($_POST["id_projet"] > 0) {
        // Modifier projet :
        $query = $bdd -> prepare ("UPDATE projet SET
                                          titre = :titre,
                                          techno_id = :techno_id,
                                          annee = :annee,
                                          lien_image = :lien_image,
                                          texte = :texte,
                                          client = :client,
                                          lien = :lien,
                                          en_ligne = :en_ligne,
                                          ordre = :ordre
                                    WHERE id_projet = :idProjet");

        $query -> execute([
                ":titre" => $_POST["titre"],
                ":techno_id" => $_POST["techno_id"],
                ":annee" => $_POST["annee"],
                ":lien_image" => $_POST["lien_image"],
                ":texte" => $_POST["texte"],
                ":client" => $_POST["client"],
                ":lien" => $_POST["lien"],
                ":en_ligne" => $_POST["en_ligne"],
                ":ordre" => $_POST["ordre"],
                ":idProjet" => $_POST["id_projet"],
            ]);

        $menuID = $_POST["id_projet"];
        ajouterSuccess("Le projet a été modifié");
      }
    }

    if(!empty($_FILES)) {
      enregistrerFichier($_FILES["imageProjet"], "images/projets/$projetID.jpg");
    }

    if(!empty($_FILES)) {
      enregistrerFichier($_FILES["imageProjet2"], "images/projets2/$projetID.jpg");
    }

    if(!empty($_FILES)) {
      enregistrerFichier($_FILES["imageProjet3"], "images/projets3/$projetID.jpg");
    }

// pour retourner vers le formulaire qu'on vient d'insérer en base :

changeDePage(BOOK_URL_SITE . "admin/projets/projet_liste.php");
