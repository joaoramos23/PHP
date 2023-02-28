<?php

    class Programador{
        
        public $idade = 23;

        public function falar(){
            echo "Olá eu sou programador<br>";
        }

        private function gritar(){
            echo strtoupper("php é muito bom!<br>");
        }

        public function acessarGritar(){
            $this->gritar();
        }
    }

    class Pessoa extends Programador{

    }

    $caralho = new Programador;
    $caralho2 = new Pessoa;

    $caralho->falar();
    $caralho2->falar();
    $caralho->acessarGritar();
    $caralho2->acessarGritar();

    echo $caralho2->idade . "<br>";
