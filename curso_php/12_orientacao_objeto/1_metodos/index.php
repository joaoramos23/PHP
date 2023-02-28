<?php

    class Pessoa{

        function falar($a,$x,$y){
            $b = $x + $y;

            echo "Olá eu sou um objeto e me chamo $a. <br>";

            echo "A soma foi: $b<br>";
        }

    }

    $joao = new Pessoa;
    $matheus = new Pessoa;
    
    $joao->falar("João",2,3);
    $joao->falar("Fernando",10,4);
    $joao->falar("Matheus",9,11);