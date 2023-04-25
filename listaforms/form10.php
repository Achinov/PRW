<?php

$nome= $_POST['nome'];
$horario= $_POST['horario'];
if($horario>18){ 
    echo "<h1>Boa noite $nome</h1>";
}
if($horario<12){ 
    echo "<h1>Bom dia $nome</h1>";
}
else{ 
    echo "<h1>Boa tarde $nome</h1>";
}

?>