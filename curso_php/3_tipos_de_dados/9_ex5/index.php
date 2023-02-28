<?php
    $nome = 'João';

    echo "Olá, $nome!<br>"; // aspas duplas pode utilizar variaveis!

    echo 'Olá, João!<br>'; // aspas simples não conseguimos usar variaveis!

    if(is_string($nome)){
        echo "Belo nome você tem, $nome!<br>";
    }
?>