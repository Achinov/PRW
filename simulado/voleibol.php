<?php

$ta=0;
$tb=0;
$tc=0;
$ta1=0;
$tb1=0;
$tc1=0;
$N=readline();
for($cont=1; $cont<=$N; $cont++)
    {
        $nome=readline();
        $l1 = explode(' ', readline());
        $l2 = explode(' ', readline());
        $a = $l1[0];
        $b = $l1[1];
        $c = $l1[2];        $a1 = $l2[0];
        $b1 = $l2[1];
        $c1 = $l2[2];

        $ta=$ta+$a; 
        $tb=$tb+$b;
        $tc=$tc+$c;
        $ta1=$ta1+$a1; 
        $tb1=$tb1+$b1;
        $tc1=$tc1+$c1;
    }


$tat=($ta1*100)/$ta;
$tat = number_format($tat, 2, ".", "");

$tbt=($tb1*100)/$tb;
$tbt = number_format($tbt, 2, ".", "");

$tct=($tc1*100)/$tc;
$tct = number_format($tct, 2, ".", "");


echo "Pontos de Saque: $tat %.\n";
echo "Pontos de Bloqueio: $tbt %.\n";
echo "Pontos de Ataque: $tct %.\n";



?>