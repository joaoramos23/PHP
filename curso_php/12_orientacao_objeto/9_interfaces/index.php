<?php

    interface Caracteristica{
        
        const nome = "João";

        public function falar();
    }

    Class Humano implements Caracteristica{

        public function falar(){

            echo "Olá mundo <br>";

        }

        public function nome(){

            echo "Olá meu nome é " . self::nome . ".<br>";
        }
    }

    $joao = new Humano;

    $joao->falar();
    $joao->nome();