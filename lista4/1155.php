<?php

$s=0;
for ($cont = 1; $cont<=100; $cont++) {

    $s=$s+(1/$cont);
}

$s = number_format($s, 2, ".", " ");
echo "$s\n";

?>