<?php 

    class Carro{

        public $portas;
        public $cor;
        public $marca;
        public $nome;

        function __construct($a,$b,$c,$d){

            $this->portas =  $a;
            $this->cor = $b;
            $this->marca = $c;
            $this->nome = $d;

        }
    }

    $agile = new Carro(4,"Prata","Chevrolet","Agile");
    $celta = new Carro(4,"Preto","Chevrolet","Celta");

    echo $agile->portas . "<br>";
    echo $agile->cor . "<br>";
    echo $agile->marca . "<br>";
    echo $agile->nome . "<br>";

    echo $celta->portas . "<br>";
    echo $celta->cor . "<br>";
    echo $celta->marca . "<br>";
    echo $celta->nome . "<br>";

    
