<?php

    $pessoa1 = [
        'nome' => 'João',
        'cabelo' => 'Liso',
        'idade' => 4,
        'altura' => 1.75,
        'cor' => 'Parda', 
    ];


    $pessoa2 = [
        'nome' => 'Maria',
        'cabelo' => 'Crespo',
        'idade' => 25,
        'altura' => 1.55,
        'cor' => 'Preta', 
    ];

    $maiorIdade = 18;

    print_r($pessoa1);
    echo "<br>";

    if($pessoa1['idade'] >= $maiorIdade){
        echo "O ",$pessoa1['nome']," é maior de idade.<br>";
    }
    else{
        echo "O ",$pessoa1['nome']," é menor de idade.<br>"; 
    }

    print_r($pessoa2);
    echo "<br>";

    if($pessoa2['idade'] >= $maiorIdade){
        echo "A ",$pessoa2['nome']," é maior de idade.<br>";
    }
    else{
        echo "A ",$pessoa2['nome']," é menor de idade.<br>"; 
    }
?>