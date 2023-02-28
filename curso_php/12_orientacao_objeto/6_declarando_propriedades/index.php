<?php

    class Carro{
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelho";

        function ligar(){
            echo "Lingado o corsa";
        }
    }

    $corsa = new Carro;

    echo $corsa->aro . "<br>";
    echo $corsa->rodas . "<br>";
    echo $corsa->cor . "<br>";
    $corsa->cor = "Azul";
    echo $corsa->cor . "<br>";
    $corsa->ligar(); 
