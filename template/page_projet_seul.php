<?php
  include_once "config.php";

  include "include/head.php";
  include "include/navigation.php";

  $afficherProjetSeul = $bdd -> query("SELECT * FROM projet WHERE id_projet = " . $_GET["lien_projet"]);
  $monProjetSeul = $afficherProjetSeul -> fetch();

  if ($_GET["lien_projet"] > count($monProjetSeul)) {
    header("location:page_projets.php");
    exit;
  }


  echo "<h2>" . $monProjetSeul["titre"] . "</h2>";
  echo "<div class='img-principale'>" . html_image_projets($monProjetSeul["lien_image"], "photo-grande") . "</div>";
  //
  // foreach ($techno_a_afficher as $key => $techno) {
  //   echo "<div>$techno[nom_techno]</div>";
  // }

  echo "<p>Présentation : " . $monProjetSeul["texte"] . "</p>";
  echo "<p>Année : " . $monProjetSeul["annee"] . "</p>";
  echo "<p>Client : " . $monProjetSeul["client"] . "</p>";
  echo "<p>Voir en ligne : " . "<a href='$monProjetSeul[lien]' target='_blank'>" . $monProjetSeul["lien"] . "</a></p>";

  include PATH_TEMPLATE . "/include/footer.php";

  exit;
?>

<main>

  <!-- div image projet principale -->


  <!-- div texte présentation projet -->

    <p>Technologies : </p>
  </div>

  <!-- div images autres -->
  <!-- <div class="">

    <div class="img-secondaire">
      <?php echo html_image_projets("images/projets2/" . $monProjetSeul["id_projet"], "mini-image"); ?>
    </div>

    <div class="img-secondaire">
      <?php echo html_image_projets("images/projets3/" . $monProjetSeul["id_projet"], "mini-image"); ?>
    </div>

    <div class="img-secondaire">
      <?php echo html_image_projets("images/projets4/" . $monProjetSeul["id_projet"], "mini-image"); ?>
    </div>

  </div> -->

</main>
