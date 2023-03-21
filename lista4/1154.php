<?php

$x=0;
$total=0;
$cont=0;
while($x>=0)
{
$x=readline();
if($x>0){
$cont++;
 $total=$total+$x; }  
}
$media=$total/($cont);
$media = number_format( $media , 2 , ".", " ");

echo "$media\n";


?>