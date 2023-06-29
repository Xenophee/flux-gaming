<?php

require_once(__DIR__ . '/../config/init.php');

try {

    // ---------------------------------------------------------------------------------
    // Récupération du fichier JS nécessaire
    $js = JS[0];



    var_dump($subjects);


} catch (\Throwable $th) {
    include_once(__DIR__ . '/../views/templates/header.php');
    include_once(__DIR__ . '/../views/error.php');
    include_once(__DIR__ . '/../views/templates/footer.php');
    die;
}



// AFFICHAGE DES VUES

include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/home.php');

include_once(__DIR__ . '/../views/templates/footer.php');