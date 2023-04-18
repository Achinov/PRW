<?php

    $n=readline();
    for ($cont = 0; $cont<$n; $cont++) 
    {$x=readline();
        $soma=0;
        for ($i = 1; $i < $x; $i++)
        {
            if($x%$i==0)
            {$soma=$soma+$i;}
            }
     if($x==$soma){echo "$x eh perfeito\n";}
    else{echo "$x nao eh perfeito\n";}
    
    }
?>