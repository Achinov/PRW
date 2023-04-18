<?php
$l1 = explode(' ', readline());

$a = $l1[0];
$b = $l1[1];
$c = $l1[2];
$d = $l1[3];

if ($b>$c && $d>$a && ($c+$d)>($a+$b) && $c>0 && $d>0 && $a % 2==0 ){
echo "Valores aceitos\n";}
else {
echo "Valores nao aceitos\n";}




?>
