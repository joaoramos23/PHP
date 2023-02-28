<?php
    $nome = "Nick";
    $idade = 16;
    $peso = 5;
    $atividadeFav = "dormir";

    $arr = compact("nome","idade","peso","atividadeFav");

    print_r($arr);
    echo "<br>";

    foreach ($arr as $titulo => $valor){
        echo $titulo . ": " . $valor . ".<br>";
    }