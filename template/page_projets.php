<?php
  include_once "config.php";

  include "include/head.php";
  include "include/navigation.php";

  $afficherProjets = $bdd -> query("SELECT * FROM projet");
  $mesProjets = $afficherProjets -> fetchAll();

  $afficherTechnos = $bdd -> query("SELECT * FROM technologie");
  $technos = $afficherTechnos -> fetchAll();

?>

<!-- Cases à cocher : sélectionner les technologies -->

<div class="techno-select">

  <h3>Filtrer selon les technologies employées :</h3>
  <ul>

    <?php

      foreach ($technos as $key2 => $techno_a_afficher) {
        $lien_techno = "page_techno_reponse.php?lien=" . $techno_a_afficher["id_techno"];
        echo "$techno_a_afficher[nom_techno]";
      }
      // $demandeTechno = $bdd -> query("SELECT * FROM technologie");
      // $resultatTechno = $demandeTechno -> fetchAll();
      //
      // foreach($resultatTechno as $key2 => $techno_a_afficher) {
      //   $lien_techno = "page_techno_reponse.php?lien=" . $techno_a_afficher["id_techno"];
      //   echo "<a href='$lien_techno'" . $techno_a_afficher["nom_techno"] . "</a>";
      // }

    ?>
  </ul>
  <!-- <form class="techno-form" action="index.html" method="post">

    <div class="margin">
      <input type="checkbox" name="css">
      <label for="css">HTML - CSS</label>
    </div>
    <button type="submit" class="btn margin">Rechercher</button>

  </form> -->
</div>

<!-- cards projets -->

<h1>Mes réalisations</h1>

<main class="projets">

    <?php

    foreach ($mesProjets as $key => $projet) {
      $url_projet = "projet_seul.php?lien_projet=" . $projet["id_projet"];
      echo "<div class='card' style='width: 18rem;'>";
      echo "<div class='card-body'>";
      echo "<h2>" . $projet["titre"] . "</h2>";
      echo html_image_projets($projet['lien_image_1'], "mini-image");
      echo "<br>";
      echo "<div class='card-text'>" . $projet["texte"] . "</div>";
      echo "<br>";
      echo "<p>Année : " . $projet["annee"] . "</p>";
      echo "<p>Client : " . $projet["client"] . "</p>";
      echo "<button class='btn'><a href='$url_projet'>Voir le détail</a></button>";
      echo "</div>";
      echo "</div>";
      echo "<br>";
    }


      // $demandeProjets = $bdd -> query("SELECT * FROM projet ORDER BY ordre");
      // $resultatProjets = $demandeProjets -> fetchAll();
      //
      // foreach ($resultatProjets as $key => $projet_a_afficher) {
      //   $lien_projet = "page_projets.php?lien=" . $projet_a_afficher["id_projet"];
      //   echo "<div class='card-body'><a href='$lien_projet'>";
      //   echo "<h2>" . $projet_a_afficher["titre"] . "</h2>";
      //   echo "<div class='card-text'>" . $projet_a_afficher["texte"] . "</div>";
      //   // echo "<p>" . $projet_a_afficher["id_techno"] . "</p>";
      //   echo html_image("images/projets/" . $projet_a_afficher['id_projet'] . ".jpg", "mini_image");
      //   echo "</a></div>";
      // }


    ?>
  </div>

  <!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h2 class="card-title"></h2>
      <p class="card-text"></p>
      <p class="card-text">Techno : </p>
      <a href="http://localhost:8888/formationphp/monbook_sophie/projet_seul.php" class="btn">Voir le détail</a>
    </div>
  </div> -->

</main>

<?php include "include/footer.php" ?>
