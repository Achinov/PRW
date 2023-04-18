<?php

$n=readline();
while($n>0){
    $n=$n-1;
    $x=readline();
    if($x>0 && $x%2==0){echo "EVEN POSITIVE\n";}
    if($x>0 && $x%2==1){echo "ODD POSITIVE\n";}
    if($x<0 && $x%2==0){echo "EVEN NEGATIVE\n";}
    if($x<0 && $x%2==-1){echo "ODD NEGATIVE\n";}
    if($x==0){echo "NULL\n";}
    
    
}



?>
