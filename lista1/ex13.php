<?php
    $l1 = explode(' ', readline());

    $a = $l1[0];
    $b = $l1[1];
    $c = $l1[2];

    $maiorAB = ($l1[0] + $l1[1] + abs($l1[0] - $l1[1])) / 2;
    $maiorfinal = ($maiorAB + $l1[2] + abs($maiorAB - $l1[2])) / 2;


   
    echo "$maiorfinal eh o maior\n";
    


?>