<?php
    
    $n=readline();

    for ($cont = 0; $cont < $n; $cont++)
    {    
        $div=0;
        $x=readline();
        for ($i = 2; $i <= $x/2; $i++)
        {
            if($x%$i==0)
            {
                $div++;
                break;
            }    
        }

        if($div==0)
        {
            echo "$x eh primo\n";
        }
        else
        {
            echo "$x nao eh primo\n";
        }  
    }
?>
