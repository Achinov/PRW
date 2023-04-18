<?php

    $n= readline();

    for ($cont = 0; $cont < $n; $cont++) {
        $l1 = explode(" ", readline());
        $x = $l1[0];
        $y = $l1[1];
        $s = 0;
        $c = 0;
        while ($c < $y) {
            if ($x % 2 != 0) {
                $s += $x;
                $c++;
            }
            $x++;
        }
    echo "$s\n";
}
