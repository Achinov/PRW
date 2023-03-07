<?php

$NOTAS = array(100, 50, 20, 10, 5, 2, 1);

$N = readline();

echo $N . "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  $N / $NOTAS[$i];
    
    echo (int) $count . " nota(s) de R$ " . $NOTAS[$i] . ",00\n";
    
    $N %= $NOTAS[$i];
}

?>