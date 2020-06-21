<?php
include "../../config.php";
include "../include/entete.php";

proteger_page();
?>

<h1>Modifier la page d'accueil</h1>

<div class="admin">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php">Retour à l'accueil admin</a>
</div>

<div class="form">
    <form enctype="multipart/form-data" action="formulaire_accueil_reponse.php" method="post">

        <textarea name="texteAccueil"><?php echo montrerValeur("TEXTE_ACCUEIL")?></textarea>

        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

        <p class="p-form">Image de la page d'accueil : </p>
        <div class="image_admin mini_image">
        <?php echo html_image("images/autres/portrait.jpg", "portrait_accueil");?>
        </div>

        <p>
        <input name="imageAccueil" type="file"  accept="image/jpeg" />
        </p>

        <p>
        <input type="submit" value="Envoyer" />
        <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php" class="button">Annuler</a>
        </p>

    </form>

</div>

<?php include "../include/footer.php" ?>
