<?php

include "../../config.php";
include "../include/entete.php";

proteger_page();


// Ajout projet :
if(!empty($_POST)) {

    // si == 0 (donc si pas d'id_projet) alors on est dans le cas d'une création
    if($_POST["id_projet"] == 0) {

        $query = $bdd -> prepare ("INSERT INTO projet (titre, annee, lien_image_1, texte, client, lien, en_ligne, ordre)
                                    VALUES (:titre, :annee, :lien_image_1, :texte, :client, :lien, :en_ligne, :ordre)");

        $query -> execute([
            ":titre" =>  $_POST["titre"],
            ":annee" =>  $_POST["annee"],
            ":lien_image_1" => $_POST["lien_image_1"],
            ":texte" => $_POST["texte"],
            ":client" =>  $_POST["client"],
            ":lien" =>  $_POST["lien"],
            ":en_ligne" =>  $_POST["en_ligne"],
            ":ordre" =>  $_POST["ordre"],
        ]);

        $projetID = $bdd -> lastInsertId();

        ajouterSuccess("Un nouveau projet a été ajouté, il a comme identifiant $projetID");
    }
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageProjet"], "images/projets/new1.jpg");
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageProjet2"], "images/projets2/new2.jpg");
}

if(!empty($_FILES)) {
    enregistrerFichier($_FILES["imageProjet3"], "images/projets3/new3.jpg");
}

rename(__DIR__ . "images/projets1/new1.jpg", __DIR__ . "images/projets1/$projetID.jpg")
rename(__DIR__ . "images/projets2/new2.jpg", __DIR__ . "images/projets2/$projetID.jpg")
rename(__DIR__ . "images/projets3/new3.jpg", __DIR__ . "images/projets3/$projetID.jpg")

changeDePage(BOOK_URL_SITE . "admin/projets/projet_liste.php");
