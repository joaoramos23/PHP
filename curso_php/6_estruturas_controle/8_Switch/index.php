<?php

    function escolha($a){
        switch($a){
            case '1': echo "Vocé escolheu o 1.<br>";
            break;

            case '2': echo "Vocé escolheu o 2.<br>";
            break;

            case '3': echo "Vocé escolheu o 3.<br>";
            break;

            default: echo "Erro, não identificado.<br>";
        }
    }

    escolha(1);
    echo "<br>";
    escolha(2);
    echo "<br>";
    escolha(3);
    echo "<br>";
    escolha(4);
    echo "<br>";
    escolha(99);
    echo "<br>";
