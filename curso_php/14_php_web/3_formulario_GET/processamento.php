<?php

    $semDados = "Sem dados!"; 

    if(!empty($_GET["nome"])){
        $nome = $_GET["nome"];
    }
    if(!empty($_GET["idade"])){
        $idade = $_GET["idade"];
    }
    if(empty($_GET["nome"])){
        $nome = $semDados;
    }
    if(empty($_GET["idade"])){
        $idade = $semDados;   
    }

    print_r($_GET);
?>

    