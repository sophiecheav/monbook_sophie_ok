<?php
include "../../config.php";
include "../include/entete.php";

proteger_page();

show_error();
show_success();

?>

<h1>Espace administration</h1>

<h2>Gestion des projets</h2>

<div class="menu">
    <a href="<?php echo BOOK_URL_SITE ?>admin/accueil_admin.php">Retour à l'accueil | </a>
    <a href="<?php echo BOOK_URL_SITE ?>admin/projets/projet_ajout.php">Ajouter un projet</a>
</div>

<div class="list">

    <?php
      $listeProjets = $bdd -> query("SELECT * FROM projet ORDER BY id_projet") -> fetchAll();

      if (count($listeProjets) == 0) {
        echo "Aucun projet";
      } else {
        echo "<ul>";
        foreach ($listeProjets as $projetSeul) {

          $lienModifier = html_a("Modifier", BOOK_URL_SITE . "admin/projets/projet_modifier.php?projet-a-modifier=$projetSeul[id_projet]");
          $lienSupprimer = html_a("Supprimer", BOOK_URL_SITE . "admin/projets/projet_supprimer.php?projetASupprimer=$projetSeul[id_projet]", "alert", "Voulez-vous effacer ce projet ?");
          echo "<li>$projetSeul[titre]($lienModifier | $lienSupprimer)</li>";
        }
        echo "</ul>";
      }
    ?>

</div>

<?php

include "../include/footer.php";
