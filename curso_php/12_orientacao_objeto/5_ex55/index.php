<?php 

    Class Carro{
        public $nomeCarro;
        public $velMaxima;

        public function setNomeVelMaxima($a,$b){
            $this->nomeCarro = $a;
            $this->velMaxima = $b;
        }

        public function getNomeVelMaxima(){
            echo "A velocidade maxima do " . $this->nomeCarro . " é: " . $this->velMaxima . " km/h.<br>";
        }

    }

    $celta = new Carro;
    $corsa = new Carro;
    $agile  = new Carro;

    $agile->setNomeVelMaxima("Agile",250);
    $celta->setNomeVelMaxima("Celta",150);
    $corsa->setNomeVelMaxima("Corsa",120);

    
    $agile->getNomeVelMaxima();
    $corsa->getNomeVelMaxima();
    $celta->getNomeVelMaxima();
