<?php

include "../config.php";

unset($_SESSION["connected_user"]);

header("location:" . BOOK_URL_SITE . "/admin/connexion.php");
exit;
