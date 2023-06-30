<?php

require_once(__DIR__ . '/../config/init.php');


// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    // ---------------------------------------------------------------------------------
    // Récupération du fichier JS nécessaire
    $js = JS[0];

    // ---------------------------------------------------------------------------------
    // Informations contenu dans le head
    $document = 'Flux-Gaming - Accueil';
    $meta = $main->meta_description;

    // ---------------------------------------------------------------------------------
    // Utilisation de la méthode extractXml() de la classe Subject pour récupérer les données à afficher
    $firstSection = $main->extractXml($main->link[0], 8);
    $secondSection = $main->extractXml($main->link[1], 3);
    $thirdSection = $main->extractXml($main->link[2], 4);

    // ---------------------------------------------------------------------------------
    // Séparation des éléments de la première section en deux tableaux pour faciliter l'affichage
    $firstPart = array_slice($firstSection, 0, 4);
    $secondPart = array_slice($firstSection, 4);

} catch (\Throwable $th) {
    include_once(__DIR__ . '/../views/templates/header.php');
    include_once(__DIR__ . '/../views/error.php');
    include_once(__DIR__ . '/../views/templates/footer.php');
    die;
}



// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DES VUES

include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/home.php');

include_once(__DIR__ . '/../views/templates/footer.php');