<?php

$n = readline();


for ($i = 0; $i < $n; $i++) {
    $palavra = readline();
    $palavras[$i] = $palavra;

   
    if (strlen($palavra) == 3) {
        if ($palavra[0] == 'o' && $palavra[2] == 'e' || $palavra[0] == 'o' && $palavra[1] == 'n' || $palavra[1] == 'n' && $palavra[2] == 'e' || $palavra[0] == 'o' && $palavra[1] == 'n' && $palavra[2] == 'e') {
            $palavras[$i] = 1;
        }
        if ($palavra[0] == 't' && $palavra[2] == 'o' || $palavra[0] == 't' && $palavra[1] == 'w' || $palavra[1] == 'w' && $palavra[2] == 'o' || $palavra[0] == 't' && $palavra[1] == 'w' && $palavra[2] == 'o')
            $palavras[$i] = 2;
        echo trim($palavras[$i]) . "\n";

    } else {
        $palavras[$i] = 3;
        echo trim( $palavras[$i]) . "\n";

    }
}?>