<?php
$l1 = explode(' ', readline());
$x = $l1[0];
$y = $l1[1];

for ($cont = 1; $cont <= $y; $cont++) {
    echo $cont;


if ($cont % $x == 0 || $cont == $y)
    {
        echo "\n";
    } else 
    {
        echo " ";
    }
}
?>