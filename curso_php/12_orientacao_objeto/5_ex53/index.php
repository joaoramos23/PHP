<?php

    class Cachorro{

        function latir(){
            echo "AUAUAUAU <br>";
        }

        function andar($a){
            echo "Estou andando a $a horas! <br>";
        }
    }

    $billy = new Cachorro;
    $faisca = new Cachorro;

    $faisca->latir();
    $faisca->andar(5);
    $billy->latir();
    $billy->andar(1);