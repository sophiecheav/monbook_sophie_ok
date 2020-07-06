<?php

  include "config.php";

  $projet_a_afficher = unProjet($_GET["lien_projet"]);

  include PATH_TEMPLATE . "page_projets.php";
?>
