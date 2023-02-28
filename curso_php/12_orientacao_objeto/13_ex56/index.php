<?php
    class Humano{

        public $nome = "João";
        public $idade = 23;

        public function falar(){
            echo "Olá meu nome é $this->nome e tenho $this->idade.<br>";
        }
    }

    class Professor extends Humano{
        public $nome = "Marcelo";
        public $idade = 27;
    }

    $pessoa = new Humano;
    $pessoa2 = new Professor;

    $pessoa->falar();
    $pessoa2->falar();
