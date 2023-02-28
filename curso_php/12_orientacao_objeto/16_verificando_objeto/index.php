<?php

    class Humano{

        public function falar(){


        }
    }

    $joao = new Humano;
    $teste = 10;

    if(is_object($joao)){

        echo "É um objeto.<br>";

    }else{
        echo "Não é um objeto.<br>";
    }

    if(is_object($teste)){

        echo "É um objeto.<br>";

    }else{
        echo "Não é um objeto.<br>";
    }

    echo get_class($joao) . "<br>";

    if(method_exists($joao,"falar")){
        echo "Metodo existe!<br>";
    }else{
        echo "Metodo não existe!<br>";
    }

    if(method_exists($joao,"correr")){
        echo "Metodo existe!<br>";
    }else{
        echo "Metodo não existe!<br>";
    }
