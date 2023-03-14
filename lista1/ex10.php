<?php
    $l1 = explode(' ', readline());
    $l2 = explode(' ', readline());
   
    $q2 = $l2[1];
    $v2 = $l2[2];
    
    $t =($q1*$v1)+($q2*$v2);
    $t = number_format($t, "2", ".", "");
 
   
    echo "VALOR A PAGAR: R$ $t\n";

    


?>