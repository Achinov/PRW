<?php
$d=1;
$s=0;

for ($cont = 1; $cont<=39; $cont+=2) {
    $s=$s+($cont/$d);
    $d=$d*2;
}

$s = number_format($s, 2, ".","");
echo "$s\n";

?>