<?php

require_once(__DIR__ . '/init_subjects.php');



define('SUBJECTS', [$pc, $xbox, $ps5, $switch, $mobile]);

define('ARTICLES', [6, 9, 12]);

define('CSS', ['lightmode', 'darkmode']);

define('JS', ['../public/assets/js/home.js', '../public/assets/js/parameters.js']);


// Tableau de caractères pour la réecriture d'url
define('ACCENT_CHARACT', ['À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'Ý'=>'Y', 'ý'=>'y', 'ÿ'=>'y', 'Ç'=>'C', 'ç'=>'c', 'Ñ'=>'N', 'ñ'=>'n']);