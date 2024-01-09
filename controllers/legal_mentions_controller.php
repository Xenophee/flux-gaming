<?php

require_once(__DIR__ . '/../config/init.php');



// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------

try {

    // ---------------------------------------------------------------------------------
    // Informations contenu dans le head
    $document = 'Flux-Gaming - Mentions Légales';


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

include(__DIR__ . '/../views/legal_mentions.php');

include_once(__DIR__ . '/../views/templates/footer.php');
