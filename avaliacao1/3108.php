<?php
$x=readline();
 for($cont=0; $cont<$x; $cont++){
    $frases= array();
     $frases = explode(' ', readline());
   
    $frases2 = str_replace('P', 'B', $frases);
    $frases3 = str_replace('F', 'V', $frases2);
    $frases4 = str_replace('T', 'D', $frases3);
    $frases5 = str_replace('R', 'L', $frases4);
    $frases6 = str_replace('J', 'Z', $frases5);
    $frases7 = str_replace('X', 'S', $frases6);
    $reversed = array_reverse($frases7);
   echo implode(" ",$reversed);
   echo"\n";
}
  

   

?>