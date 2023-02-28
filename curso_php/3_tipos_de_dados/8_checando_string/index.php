<?php
    $nome = "João";
    $idade = 23;

    if(is_string($nome)){
        echo "Olá, $nome!<br>";
    }

    if(is_string($idade) == false){
        echo "Dado desconhecido! ($idade) não é uma string!<br>";
    }
?>
