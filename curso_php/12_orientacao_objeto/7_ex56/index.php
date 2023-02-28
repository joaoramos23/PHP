<?php
    Class Humano{

        public $nome;
        public $idade;

        function falar(){

            echo "Estou falando.<br>";

        }
    }

    Class Professor extends Humano{
        public $nome;
        public $idade;

        function ensinar(){
            echo "Quanto é 2 + 2?<br>";
        }
    }

    $joao = new Humano;

    $joao->nome = "João";
    echo $joao->nome . "<br>";
    $joao->idade = 23;
    echo $joao->idade . "<br>";
    

    $marcelo = new Professor;

    $marcelo->nome = "Marcelo";
    echo $marcelo->nome . "<br>";
    $marcelo->idade = 44;
    echo $marcelo->idade . "<br>";


    $marcelo->falar();
    $joao->falar();
    $marcelo->ensinar();
