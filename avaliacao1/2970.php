<?php


$cont=1;
while($cont==1)
    {
        $k=readline();
        $l1 = explode(' ', readline());
      
        $x= $l1[0];
        $y= $l1[1];
        for($i=1; $i<$k; $i++)
        {
            $l2 = explode(' ', readline());
            $a= $l2[0];
            $b= $l2[1];
            if($a>$x && $b>$y){echo "NE\n";}
            if($a>$x && $b<$y){echo "SE\n";}
            if($a<$x && $b>$y){echo "NO\n";}
            if($a<$x && $b<$y){echo "SO\n";}
            if($a==$x || $b==$y){echo "divisa\n";}
        }
        if($k==0){$cont=0;}
    }

?>