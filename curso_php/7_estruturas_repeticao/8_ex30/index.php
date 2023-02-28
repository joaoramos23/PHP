<?php

    $n = [];
    $parada = 20;

    for($i = 0; $i <= count($n); $i++){
        $n[$i] = $i;
        
        if($n[$i] % 2 == 0){
            echo "$n[$i] é par.<br>";
        }

        if($i == $parada){
            break;
        }
    }

    print_r($n) . "<br>";

    