<?php



while(true){
    $l1 = explode(' ', readline());
    $x=$l1[0];
    $y=$l1[1];
    if($x>0 && $y>0){echo "primeiro\n";}
    if($x<0 && $y>0){echo "segundo\n";}
    if($x<0 && $y<0){echo "terceiro\n";}
    if($x>0 && $y<0){echo "quarto\n";}
    
    if($x==0 || $y==0){break;}
    
    
    
}




?>
