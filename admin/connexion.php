<?php
include "../config.php";
include "include/entete.php";


show_error();
show_success();

?>

<h1>Mon Book | Espace Admin</h1>

<h2>Se connecter</h2>

<div class="box_connect">
    <form method="post" action="connexion_reponse.php">
        <input type="text" name="identifiant_admin" placeholder="Identifiant">
        <br>
        <input type="password" name="motdepasse_admin" placeholder="Mot de passe">
        <br><br>
        <input type="submit" class="btn">
    </form>


</div>


<?php
  include "include/footer.php";
?>
