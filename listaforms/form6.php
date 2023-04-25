<?php

$n1= $_POST['n1'];
$n2= $_POST['n2'];
$nome= $_POST['nome'];
$f= $_POST['f'];
$media= ($n1+$n2)/2;
echo"$nome sua média é: $media Sua frequência é: $f \n";

if($media<5){
    echo "<h1 style='color:red'> Reprovado por nota</h1>";
}   
if($f<75){
    echo "<h1 style='color:red'>Reprovado por presença</h1>";
    }
if($media>=5 && $f>=75){
        echo "<h1 style='color:green'>Aprovado</h1>";
    }   ?> 
    
    