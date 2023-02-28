<?php
    $carro = ['marca' => 'BMW','motor' => 2.4,'tetoSolar' => true];

    $chaves = array_keys($carro);

    print_r($chaves);
    echo "<br>";

    $valor = array_values($carro);

    print_r($valor);
    echo "<br>";

    if(array_key_exists("marc",$carro)){
        echo "A chave existe!<br>";
    }else{
        echo "A chave não existe!<br>";
    }

    if(isset($carro['motor'])){
        echo "A chave existe!<br>";
    }else{
        echo "A chave não existe!<br>";
    }
