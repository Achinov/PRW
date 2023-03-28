<?php 
    for ($i=0; $i < 100; $i++)
    { 
        $A[$i]= floatval(fgets(STDIN));
        if ($A[$i]<=10)
        {
            $A[$i] = number_format($A[$i], 1, ".", "");
            echo "A[".$i."] = ".$A[$i]."\n";
        } 

        
    }
?>