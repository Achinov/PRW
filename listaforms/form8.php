<?php

$n= $_POST['numero'];
$cont=1;
while($cont<=10){
    $tabua=$cont*$n;
    echo "$cont x $n = $tabua\n";
    $cont++;
    echo "<br>";
}
 ?> 
    
    