<?php

$n=readline();

while($n>0){
    $l1 = explode(' ', readline());
    $x=$l1[0];
    $y=$l1[1];
    $z=$l1[2];
    $m=(($x*2)+($y*3)+($z*5))/10;
    $m = number_format($m, 1, ".", "");
    $n--;
    echo "$m\n";
 
}


?>
