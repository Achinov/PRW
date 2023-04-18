<?php

while ($senha = rtrim(fgets(STDIN))) { 

    if (strlen($senha) < 6 || strlen($senha) > 32) {
        echo "Senha invalida.\n";
        continue; 
    }

    
    if (!ctype_alnum($senha)) {
        echo "Senha invalida.\n";
        continue;
    }

   
    if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        echo "Senha invalida.\n";
        continue;
    }

  
    echo "Senha valida.\n";
}

?>