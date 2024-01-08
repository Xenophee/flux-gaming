<?php


/**
 * Fonction de réecriture des urls
 * 
 * @param string $string
 * 
 * @return string
 */
function slug(string $string):string {

    $string = strtr($string, ACCENT_CHARACT);
    $string = strtolower($string);
    $string = preg_replace(
        array('/[^a-zA-Z0-9 \'-]/', '/[ -\']+/','/^-|-$/'),
        array('', '-', ''), $string);
    
    return $string;
}



