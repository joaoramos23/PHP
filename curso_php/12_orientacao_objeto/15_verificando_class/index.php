<?php

    class Humano{

        public $idade = 20;
        public $nome = "João";

        public function teste(){
                    
                }

        public function falar(){

        }
    }

    if(class_exists("Humano")){
        echo "A classe existe!<br>";
    }

    if(class_exists("Cachorro")){
        echo "A classe existe!<br>";
    }else{
        echo "A classe não existe!<br>";
    }

    print_r(get_class_vars("Humano"));
    echo "<br>";

    print_r(get_class_methods("Humano"));
    echo "<br>";