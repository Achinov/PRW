<?php 
    $v=readline();
    $N[0]=$v;
     for ($i=0; $i < 100; $i++)
        
        
     {  $N[$i] = number_format($N[$i], 4, ".", "");
        echo "N[".$i."] = ".$N[$i]."\n";
        $N[$i+1]=$N[$i]/2;
     }
?>