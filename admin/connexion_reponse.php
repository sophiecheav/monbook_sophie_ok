<?php
  include "../config.php";

  if(empty($_POST["identifiant_admin"]) || empty($_POST["motdepasse_admin"])) {
      ajouterErreur("<div class='err'>Merci de saisir votre identifiant et/ou mot de passe</div>");
  } else {
    // en blanc : se rapporte aux champs de la BDD
    // en vert : se rapporte aux champs remplis dans le formulaire sur connexion.php
    $queryUtilisateur = "SELECT * FROM user where identifiant = '$_POST[identifiant_admin]' AND mot_de_passe = '$_POST[motdepasse_admin]'";
    $resultatUtilisateur = $bdd -> query($queryUtilisateur) -> fetchAll(PDO::FETCH_ASSOC);
    }

  if(!empty($resultatUtilisateur)) {
    $_SESSION["connected_user"] = $resultatUtilisateur[0];
    header("location:accueil_admin.php");
    exit;
  } else {
    header("location:connexion.php");
    ajouterErreur("<div class='err'>Cet utilisateur n'existe pas.</div>");
  }

var_dump($_SESSION);
