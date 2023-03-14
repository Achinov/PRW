<?php
    $l1 = explode(' ', readline());
    //$l1 = explode(' ', "12.7 10.4 15.2");
    $A = floatval($l1[0]);
    $B = floatval($l1[1]);
    $C = floatval($l1[2]);
  
    $tri= number_format(($A*$C)/2, 3, ".", "");
    $circ= number_format((3.14159)*$C*$C, "3", ".", "");
    $trap= number_format((($A+$B)/2)*$C, 3, ".", "");
    $quad= number_format(($B*$B), 3, ".", "");
    $ret= number_format(($A*$B), 3, ".", "");
 
   
    echo "TRIANGULO: $tri\n";
    echo "CIRCULO: $circ\n";
    echo "TRAPEZIO: $trap\n";
    echo "QUADRADO: $quad\n";
    echo "RETANGULO: $ret\n";
    


?>