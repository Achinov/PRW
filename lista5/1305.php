<?php

while (($input = readline()) !== false) {
    $num = floatval($input);
    $cutoff = floatval(readline());

    $frac = $num - floor($num);
    if ($frac > $cutoff) {
        echo ceil($num) . "\n";
    } else {
        echo floor($num) . "\n";
    }
}
?>
