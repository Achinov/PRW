<?php

$H = readline ();
$V = readline ();
$KML = $H*$V;
$L=($KML/12);

$L = number_format($L, 3, ".", "");
echo "$L\n";

?>