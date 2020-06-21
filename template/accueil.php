<?php
  include_once "config.php";
  include PATH_TEMPLATE . "/include/head.php";
  include PATH_TEMPLATE . "/include/navigation.php";

?>

    <main class="accueil">

<!-- image accueil book (portrait) -->
      <div class="portrait">
        <?php echo html_image("images/autres/portrait.jpg") ?>
      </div>

<!-- texte présentation -->
      <div class="texte">
        <?php echo nl2br(montrerValeur("TEXTE_ACCUEIL")) ?>
      </div>

    </main>


<?php include PATH_TEMPLATE . "/include/footer.php" ?>
