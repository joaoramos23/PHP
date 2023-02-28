<?php

    class Carro{

        public $rodas = 4;
        private $vidros = "Sem pelicula";
        protected $portas = 4;

        public function vidroDeFabrica(){
            return $this->vidros;
        }

        public function portas(){
            return $this->portas;
        }

    }

    Class Mecanico {

        public function alterarRodas($obj){
            $obj->rodas = 10;
        }

        public function colocarPelicula($obj,$tipoPelicula){
            $obj->vidros = $tipoPelicula;
        }
    }

    $carro = new Carro;

    echo $carro->rodas . "<br>";

    $matheus = new Mecanico;

    $matheus->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    echo $carro->vidroDeFabrica() . "<br>";

    echo $carro->portas() . "<br>";

    //NÃO PODE ALTERAR PORQUE É PRIVADO    
    //$matheus->colocarPelicula($carro,"FUMEZAO DA MASSA PRETAO");
