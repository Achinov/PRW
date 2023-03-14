<?php
$l1 = explode(' ', readline());

$a = $l1[0];
$b = $l1[1];

switch($a){
case 1:
$total = 4.00 * $b;
break;
case 2:
$total = 4.50 * $b;
break;
case 3:
$total = 5.00 * $b;
break;
case 4:
$total = 2.00 * $b;
break;
case 5:
$total = 1.50 * $b;
break;
}
echo "Total: R$ " . number_format($total, 2, '.', '') . "\n";
?>
