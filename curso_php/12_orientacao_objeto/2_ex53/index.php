<?php 

    class Cachorro{

        function latir(){
                echo "auau.<br>";
        }

        function andar($a){
            echo "O cachorro andou $a metros.<br>";
        }
    }

    $viralata = new Cachorro;
    $puddle = new Cachorro;

    $puddle-> latir();
    $viralata-> latir();
    
    $viralata-> andar(100);
    $puddle-> andar(25);


    