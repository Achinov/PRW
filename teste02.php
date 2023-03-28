<?php

$alunos = array("Murilo", "Cássio", "Ricardo","Joao");
print_r($alunos);
echo "<br>";


echo "Quantidadede elementos: ".count($alunos)."<br>";
echo "<hr>";
for ($x=0; $x <count($alunos) ; $x++) 
{ 
    echo "Aluno na posição $x: ".$alunos[$x]."<br>";
    echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
    echo "<br>";
    echo "<hr>";
}


$indice = array_search("Cássio",$alunos);
if($indice === false)
    echo "Elemento não encontrado!<br>";
    else 
    echo"Elemento encontrado na posição $indice!<br>";
?>