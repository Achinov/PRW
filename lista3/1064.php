<?php

$n=0;
$cont=0;
$soma=0;
while($n<6){
    $x=readline();
    if($x>0){
        $cont++; 
        $soma=$soma+$x;
        }
    $n++;
    }
    

    
echo "$cont valores positivos\n";
$media=($soma/$cont);
$media=number_format($media, 1, ".", "");

echo "$media\n";
?>