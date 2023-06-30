<?php

require_once(__DIR__ . '/constants.php');


// Initialisation des éléments d'affichage selon le cookie ou par défaut en sécurisant les données.


// ==========================================================
// INITIALISATION DU THÈME


if (isset($_COOKIE['theme'])) {

    $cookieTheme = intval($_COOKIE['theme']);

    $css = (($cookieTheme > 1) && ($cookieTheme <= count(CSS))) ? CSS[$cookieTheme -1] : CSS[0];

} else {
    $css = CSS[0];
}

// ==========================================================
// INITIALISATION DES SUJETS À AFFICHER

if (isset($_COOKIE['subjects'])) {

    $cookieSubjects = unserialize($_COOKIE['subjects']);
    $cookieSubjects = filter_var($cookieSubjects, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
    
    $subjects = [];

    foreach ($cookieSubjects as $value) {

        if ($value >= 0 && $value < count(SUBJECTS)) {
            array_push($subjects, SUBJECTS[$value]);
        }
        
    }

    $subjects = (count($subjects) == 3) ? $subjects : [SUBJECTS[0], SUBJECTS[1], SUBJECTS[2]];

} else {
    $subjects = [SUBJECTS[0], SUBJECTS[1], SUBJECTS[2]];
}

// ==========================================================
// INITIALISATION DU NOMBRE D'ARTICLES

if (isset($_COOKIE['articlesNumber'])) {

    $cookieNumber = intval($_COOKIE['articlesNumber']);

    $articles = (in_array($cookieNumber, ARTICLES)) ? $cookieNumber : ARTICLES[0];

} else {
    $articles = ARTICLES[0];
}