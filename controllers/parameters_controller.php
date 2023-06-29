<?php

require_once(__DIR__ . '/../config/init.php');

try {

    // ---------------------------------------------------------------------------------
    // Récupération du fichier JS nécessaire
    $js = JS[1];

    // ---------------------------------------------------------------------------------
    // Préparation du tableau d'erreur en vu de la vérification du formulaire
    $error = [];


// ===================================================================================================================
// -------------------------------------------------------------------------------------------------------------------
// VÉRIFICATION DU FORMULAIRE S'IL EST ENVOYÉ

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // ---------------------------------------------------------------------------------
        // VÉRIFICATION SUR LE CHOIX DU THÈME

        $themeChoice = intval(filter_input(INPUT_POST, 'themeChoice', FILTER_SANITIZE_NUMBER_INT));

        if (empty($themeChoice)) {
            $error['theme'] = 'Veuillez choisir un thème.';
        } else if ($themeChoice < 1 || $themeChoice > count(CSS)) {
            $error['theme'] = 'Veuillez choisir un thème sans trafiquer le code.';
        }

        // ---------------------------------------------------------------------------------
        // VÉRIFICATION SUR LA RÉCUPÉRATION DES SUJETS

        $subjectsChoice = filter_input(INPUT_POST, 'subjects', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        if (empty($subjectsChoice) || count($subjectsChoice) != 3) {
            $error['subject'] = 'Veuillez choisir trois sujets.';
        } else {
            foreach ($subjectsChoice as $value) {
                if ($value < 0 || $value > count(SUBJECTS) - 1) {
                    $error['subject'] = 'Veuillez choisir trois sujets sans trafiquer le code.';
                }
            }
        }

        // ---------------------------------------------------------------------------------
        // VÉRIFICATION SUR LA RÉCUPÉRATION DU NOMBRE D'ARTICLES

        $articlesNumber = intval(filter_input(INPUT_POST, 'articlesNumber', FILTER_SANITIZE_NUMBER_INT));

        if (empty($articlesNumber)) {
            $error['articlesNumber'] = 'Veuillez choisir un nombre d\'articles.';
        } else if (!in_array($articlesNumber, ARTICLES)) {
            $error['articlesNumber'] = 'Veuillez choisir un nombre d\'articles valide.';
        }
        

        // ---------------------------------------------------------------------------------
        // SI TOUT EST BON, CRÉATION DES COOKIES

        if (empty($error)) {

            // On serialize pour convertir le tableau en chaine dans le cookie (dure 1 an)
            setcookie('theme', $themeChoice, time() + (365 * 24 * 3600), '/');
            setcookie('subjects', serialize($subjectsChoice), time() + (365 * 24 * 3600), '/');
            setcookie('articlesNumber', $articlesNumber, time() + (365 * 24 * 3600), '/');

            // Renvoi vers la page d'accueil
            header('location: /controllers/home_controller.php');
            die;
        }
    }

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

include(__DIR__ . '/../views/parameters.php');

include_once(__DIR__ . '/../views/templates/footer.php');
