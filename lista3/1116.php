<?php

$cont=readline();
while($cont>0){
    $cont--;
    $l1 = explode(' ', readline());
    $x=$l1[0];
    $y=$l1[1];
    if($y==0){echo "divisao impossivel\n";}
    else{
        $z=($x/$y);
        $z = number_format($z, 1, ".", "");
        echo"$z\n";
    }
}

?>
