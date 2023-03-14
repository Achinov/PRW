<?php
 $l1 = explode(' ', readline());
 $l2 = explode(' ', readline());
 $x1 = $l1[0];
 $y1 = $l1[1];
 $x2 = $l2[0];
 $y2 = $l2[1];


 $total = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
 echo number_format(($total), 4, '.', '')."\n";

?>