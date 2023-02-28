<?php

    class Animal{
        public $nome;
        public $idade;

        function escolherNome($a,$b){
            $this->nome = $a;
            $this->idade = $b;
        }

        function latir(){
            return "au au <br>";
        }

        function latirForte(){
            return strtoupper($this->latir());
        }

    }

    $cachorro = new Animal;

    echo "O nome do animal é: $cachorro->nome e tem $cachorro->idade anos. <br>";

    $cachorro->escolherNome("Nick",16);
    echo "O nome do animal é: $cachorro->nome e tem $cachorro->idade anos. <br>";

    echo $cachorro->latir();
    echo $cachorro->latirForte();
