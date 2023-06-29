<?php

require_once(__DIR__ . '/../config/init.php');

try {

    $flux = intval(filter_input(INPUT_GET, 'flux', FILTER_SANITIZE_NUMBER_INT));

    $url = simplexml_load_file($subjects[$flux]->link);

    $data = $url->channel->item;

    for ($number = 0; $number < $articles; $number++) {
        $items[] = $data[$number];
    }

} catch (\Throwable $th) {
    include_once(__DIR__ . '/../views/templates/header.php');
    include_once(__DIR__ . '/../views/error.php');
    include_once(__DIR__ . '/../views/templates/footer.php');
    die;
}



// AFFICHAGE DES VUES

include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/page.php');

include_once(__DIR__ . '/../views/templates/footer.php');