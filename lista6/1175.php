<?php

for($cont=0; $cont<20; $cont++ )
{$X[$cont]=readline();
 $Y[19-$cont]=$X[$cont];

 
}

for($cont=0; $cont<20; $cont++ )
{
 echo "N[".$cont."] = ";
 echo $Y[$cont];
 echo"\n";
 
}


?>
