<?php
$n = readline();

for($cont=1; $cont<=$n; $cont++){

    $c = explode(' ', readline());
    $a= $c[0];
    $b= $c[1];
$fin = substr($a, -strlen($b));

if($b == $fin){echo "encaixa\n";}
else {echo "nao encaixa\n";}      
}

?>