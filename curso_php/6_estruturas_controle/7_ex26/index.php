<?php

    function vel($a){
        $velPermitida = 40;

        if($a < $velPermitida){
            echo "Você está na velocidade perimitida!<br>";
        }
        else if($a == $velPermitida){
            echo "Tenha cuidado com a velocidade!<br>";
        }
        else{
            echo "Parabens você tomou no cu! >:D <br>";
        }
    }
    vel(35);
    echo "<br>";
    vel(40);
    echo "<br>";
    vel(45);
    echo "<br>";