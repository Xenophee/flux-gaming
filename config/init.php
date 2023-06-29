<?php

require_once(__DIR__ . '/constants.php');


// Initialisation des éléments d'affichage selon le cookie ou par défaut.


// ==========================================================
// INITIALISATION DU THÈME

if (isset($_COOKIE['theme'])) {
    $css = CSS[$_COOKIE['theme'] -1];
} else {
    $css = CSS[0];
}

// ==========================================================
// INITIALISATION DES SUJETS À AFFICHER

if (isset($_COOKIE['subjects'])) {
    $cookie = unserialize($_COOKIE['subjects']);
    $subjects = [];

    foreach ($cookie as $value) {
        array_push($subjects, SUBJECTS[$value]);
    }
    
} else {
    $subjects = [SUBJECTS[0], SUBJECTS[1], SUBJECTS[2]];
}

// ==========================================================
// INITIALISATION DU NOMBRE D'ARTICLES

if (isset($_COOKIE['articlesNumber'])) {
    $articles = $_COOKIE['articlesNumber'];
} else {
    $articles = ARTICLES[0];
}