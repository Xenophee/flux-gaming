<?php

require_once(__DIR__ . '/../config/init.php');



// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    // ---------------------------------------------------------------------------------
    // Récupération du flux à exploiter dans le paramètre d'url
    $flux = intval(filter_input(INPUT_GET, 'flux', FILTER_SANITIZE_NUMBER_INT));

    // ---------------------------------------------------------------------------------
    // Sécurisation de la page dans le cas d'un flux inexact
    if ($flux < 0 || $flux > count($subjects) -1) {
        throw new Exception();
    }

    // ---------------------------------------------------------------------------------
    // Informations contenu dans le head
    $document = 'Flux-Gaming - Actualités ' . $subjects[$flux]->title;
    $meta = $subjects[$flux]->meta_description;

    // ---------------------------------------------------------------------------------
    // Utilisation de la méthode extractXml() de la classe Subject pour récupérer les données à afficher
    $items = Subject::extractXml($subjects[$flux]->link, $articles);

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

include(__DIR__ . '/../views/articles.php');

include_once(__DIR__ . '/../views/templates/footer.php');
