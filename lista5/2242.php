<?php

function risadaEngracada($risada) {
    $v = array('a', 'e', 'i', 'o', 'u'); 
    $vRisada = array_intersect(str_split($risada), $v); 
    $vJuntas = implode("", $vRisada); 
    $vJuntasInvertidas = strrev($vJuntas); 
    return $vJuntas == $vJuntasInvertidas; 
}

$risada = trim(readline());

if (risadaEngracada($risada)) {
    echo "S\n";
} else {
    echo "N\n";
}

?>