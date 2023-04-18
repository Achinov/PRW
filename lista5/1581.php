<?php

$n = readline();
for ($cont=0; $cont<$n; $cont++) {


    $m = readline();
    $idiomas = array();

    for ($i = 0; $i < $m; $i++) {
        $idioma = readline();
        array_push($idiomas, $idioma);
    }

    if (count(array_unique($idiomas)) == 1) {
        echo trim($idiomas[0]) . "\n";
    } else {
        echo "ingles" . "\n";
    }
}
