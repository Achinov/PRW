<?php


$a= $_POST['ano'];
if($a%4==0 || $a%400==0){echo "$a é um ano bissexto\n";}
else{echo "$a não é um ano bissexto\n";}
?>