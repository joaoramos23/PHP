<?php

    abstract class Teste{

        public static function testandoClasse(){

            echo "Testando metodo abstrato <br>";

        }

        abstract public function teste();
    }

    class Testando extends Teste{

        public function teste(){

            echo "Testando metodo abstrata";

        }
    }

    Teste::testandoClasse();
    $x = new Testando;
    $x->teste();