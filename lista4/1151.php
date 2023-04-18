<?php

    $n = readline();
    $l1 = 0;
    $l2= 1;
    
    if ($n == 1) 
        {
            echo "0\n";
        } else if ($n > 1) 
            {
                echo "$l1";
                echo " $l2";
                for ($cont = 2; $cont < $n; $cont++) 
                {
                    $soma = $l1+ $l2;
                    $l1 = $l2;
                    $l2= $soma;
                    echo " $soma";
                }
            }
    echo "\n";
?>