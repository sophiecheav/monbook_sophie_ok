<?php
include "../config.php";
include "include/entete.php";

proteger_page();

show_error();
show_success();

?>

<h1>Bienvenue dans votre espace administration</h1>

<h2>Cliquez ci-dessous pour modifier votre Book</h2>

<div class="menu_admin">

  <a href="<?php echo BOOK_URL_SITE ?>" target="_blank">Voir le site</a>
  <a href="<?php echo BOOK_URL_SITE ?>admin/accueil/formulaire_accueil.php">Modifier ma page d'accueil</a>
  <a href="<?php echo BOOK_URL_SITE ?>admin/projets/projet_liste.php">Ajouter, modifier ou supprimer un projet</a>
  <a href="<?php echo BOOK_URL_SITE ?>admin/user/user_liste.php">Ajouter, modifier ou supprimer un utilisateur</a>
  <a href="<?php echo BOOK_URL_SITE ?>admin/se_deconnecter.php">Se déconnecter</a>
</div>


<?php

  include "include/footer.php";

?>
