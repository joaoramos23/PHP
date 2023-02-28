<?php
    $vel = 80;
    $speed = 500;

    function maxSpeed($speed){

        if(is_int($speed)){
            echo "O carro atinge a velocidade maxima de $speed km/h. <br>";
        }
        else{
            echo "Passe um valor do tipo inteiro!<br>";
        }
    }

    maxSpeed(400);
    maxSpeed($vel);
    maxSpeed($speed);
    maxSpeed("Joao");