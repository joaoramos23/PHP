<?php

    class Carro{
        public $nome;
        public $velocidadeMaxima;
        

        function setVelocidadeMaxima($a){
           $this->velocidadeMaxima = $a; 
        }

        function setNomeVeiculo($nome){
            $this->nome = $nome;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade maxima do $this->nome é: " . $this->velocidadeMaxima . "<br>";
        }
    }

    $corsa = new Carro;
    $corsa->setVelocidadeMaxima(120);
    $corsa->setNomeVeiculo("Corsa 1.8");

    $celta = new Carro;
    $celta->setVelocidadeMaxima(80);
    $celta->setNomeVeiculo("Celta 2.0 TURBO");

    $lancer = new Carro;
    $lancer->setVelocidadeMaxima(340); 
    $lancer->setNomeVeiculo("Lancer EVO 9");

    $corsa->getVelocidadeMaxima();
    $celta->getVelocidadeMaxima();
    $lancer->getVelocidadeMaxima();

    

    