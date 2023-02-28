<?php

    echo NULL;

    $nome = NULL;

    if(is_null($nome)){
        echo "O valor é nulo!.<br>";
    }

    if($nome == NULL){
        $nome = 'João';
    }

    echo $nome;
?>