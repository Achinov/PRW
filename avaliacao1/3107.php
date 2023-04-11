<?php


$vm=readline();
$d=readline();
$c=readline();
$vm = number_format($vm, 2, ".", "");
$d = number_format($d, 2, ".", "");
$td= $d/$vm;
$td = number_format($td, 2, ".", "");
$tc = $d/$c;
$tc = number_format($tc, 2, ".", "");
echo "Total horas: $td\n";
echo "Total combustivel: $tc\n"; 

?>