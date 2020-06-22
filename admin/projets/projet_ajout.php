<?php
include "../../config.php";
include "../include/entete.php";

proteger_page();

    $afficherTechnos = $bdd -> query("SELECT * FROM technologie");
    $technos = $afficherTechnos -> fetchAll();

show_error();
show_success();

// var_dump();

?>

<h1>Ajouter un projet</h1>

<div class="menu">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php">Retour à l'accueil admin</a>
</div>

<div class="form">
    <form enctype="multipart/form-data" action="projet_ajout_reponse.php" method="post">
        <!-- crée un champ caché qui va s'appeler id_projet et qui aura comme valeur imposée 0 (fonction echoKey) ; si je n'avais pas renseigné de valeur par défaut, aurait mis une chaîne vide -->
        <input type="hidden" name="id_projet" value="<?php echoKey($projetID, "id_projet", 0)  ?>">

        <div class="field">
            Titre : <input name="titre" placeholder="Titre" type="text" value="">
        </div>

        <div class="field">
            Année : <input name="annee" placeholder="Année" type="text" value="">
        </div>

        <div class="field">
            Texte de présentation : <textarea name="texte" placeholder="Texte" type="text" value=""></textarea>
        </div>

<!-- Comment lier la table technologies et insérer le champ dans le formulaire ??? -->

        <div class="field">
          Technologies utilisées :
          <?php
          foreach ($technos as $key2 => $techno_a_afficher) {
            $lien_techno = "page_techno_reponse.php?lien=" . $techno_a_afficher["id_techno"];
            echo "$techno_a_afficher[nom_techno]";
          }
          ?>
        </div>

        <div class="field">
            Client : <input name="client" placeholder="Client" type="text"  value="">
        </div>

        <div class="field">
            Lien : <input name="lien" placeholder="Lien" type="text"  value="">
        </div>

        <div class="field">
            En ligne :
            <div class="list2">
              <label for="oui">oui<input name="en_ligne" id="oui" type="radio"  value="1"></label>
              <label for="non">non<input name="en_ligne" id="non" type="radio"  value="0"></label>
            </div>
        </div>

        <div class="field">
            Ordre :
<!-- ajouter une boucle incrémentant de 1 l'id_projet à chaque nouvel ajout de projet -->
            <input name="ordre" placeholder="Ordre" type="number"  value="">
        </div>

        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <div class="field image_admin">
        <!-- $_FILES à insérer... -->
        </div>

        <div>
          <p>Image 1 du projet : </p>

          <input name="lien_image_1" type="file" accept="image/jpeg, image/jpg, image/png" />
        </div>

        <div>
          <p>Image du projet 2 : </p>
          <input name="lien_image_2" type="file"  accept="image/jpeg, image/jpg, image/png" />
        </div>

        <div>
          <p>Image du projet 3 : </p>
          <input name="lien_image_3" type="file" accept="image/jpeg, image/jpg, image/png" />
        </div>

        <input type="submit" value="Envoyer" class="btn"/>
        <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php" class="button">Annuler</a>

    </form>

</div>

<?php
var_dump($_POST);

include "../include/footer.php";
