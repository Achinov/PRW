<?php 
    $v=readline();
    $N[0]=0;
     for ($i=0; $i < 10; $i++)
     {  
        echo "N[".$i."] = ".$N[$i]."\n";
        $N[$i+1]=$N[$i]++;
        if($N[$i]==$v){$N[$i]=0;}
     }
?>