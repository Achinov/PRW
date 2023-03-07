<?php

$R = readline ();
$n=3.14159;
$V= ($R*$R*$R)*$n*(4/3);

$V = number_format($V, 3, ".", "");
echo "VOLUME = $V\n";


?>
