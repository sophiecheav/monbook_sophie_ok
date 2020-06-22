<?php
include "../../config.php";
include "../include/entete.php";

proteger_page();

$ajoutProjet = $bdd -> query("INSERT INTO projet (titre, annee, lien_image, texte, client, en_ligne, ordre) VALUES ('Blabla', '2020', 'images/projets/blabla.jpg', 'belbfhilbfhl', 'Descodeuses', 1, 10)");
var_dump($ajoutProjet -> fetchAll()); // va m'afficher les éléments du tableau créé

?>

<h1>Ajouter un projet</h1>

<div class="menu">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php">Retour à l'accueil admin</a>
</div>

<h2><?php echokey($projetAModifier, "titre") ?></h2>

<div class="form">
    <form enctype="multipart/form-data" action="projet_formulaire_reponse.php" method="post">
        <!-- crée un champ caché qui va s'appeler id_projet et qui aura comme valeur imposée 0 (fonction echoKey) ; si je n'avais pas renseigné de valeur par défaut, aurait mis une chaîne vide -->
        <input type="hidden" name="id_projet" value="<?php echoKey($projetAModifier, "id_projet", 0)  ?>">

        <div class="field">
            Titre : <input name="titre" placeholder="Titre" type="text" value="<?php echoKey($projetAModifier, "titre")  ?>">
        </div>

        <div class="field">
            Année : <input name="annee" placeholder="Année" type="text" value="<?php echoKey($projetAModifier, "annee")  ?>">
        </div>

        <div class="field">
            Texte de présentation : <textarea name="texte" placeholder="Texte" type="text" value="<?php echoKey($projetAModifier, "texte") ?>"></textarea>
        </div>

<!-- Comment lier la table technologies et insérer le champ dans le formulaire ??? -->

        <div class="field">
          Technologies utilisées : <input name="techno_id" placeholder="Technologie" type="text" value="<?php echokey($projetAModifier, "techno_id") ?>">
        </div>

        <div class="field">
            Client : <input name="client" placeholder="Client" type="text"  value="<?php echoKey($projetAModifier, "client")?>">
        </div>

        <div class="field">
            Lien : <input name="lien" placeholder="Lien" type="text"  value="<?php echoKey($projetAModifier, "lien")?>">
        </div>

        <div class="field">
            En ligne :
            <div class="list2">
              <label for="oui">oui<input name="en_ligne" id="oui" type="radio"  value="1" required></label>
              <label for="non">non<input name="en_ligne" id="non" type="radio"  value="0" required></label>
            </div>
        </div>

        <div class="field">
            Ordre : <input name="ordre" placeholder="Ordre" type="number"  value="<?php echoKey($projetAModifier, "ordre")?>">
        </div>

        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="field image_admin">
        <?php
        if(!empty($_GET["projetAAfficher"])) {
            echo html_image_projets("images/projets/$_GET[projetAAfficher].jpg", "mini_image");
            }
        ?>
        </div>

        <div>
          <p>Image 1 du projet : </p>
          <input name="imageProjet" type="file" accept="image/jpeg, image/jpg, image/png" />
        </div>

        <div>
          <p>Image du projet 2 : </p>
          <input name="imageProjet2" type="file"  accept="image/jpeg, image/jpg, image/png" />
        </div>

        <div>
          <p>Image du projet 3 : </p>
          <input name="imageProjet3" type="file"  accept="image/jpeg, image/jpg, image/png" />
        </div>

        <input type="submit" value="Envoyer" class="btn"/>
        <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php" class="button">Annuler</a>

    </form>

</div>

<?php

include "../include/footer.php";
