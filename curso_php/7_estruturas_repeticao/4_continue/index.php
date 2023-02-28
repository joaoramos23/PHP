<?php
    $a = 10;
    $b = 10;

    while($a > 0){
        
        if(($a >= 5) and ($a <= 7)){
            echo "Pulou a execução $a <br>";
            $a--;
            continue;
        }
        echo "Executando o loop $a <br>";
        $a--;
    }
    echo "<br>";
    while($b > 0){
        if(($b >= 5) and ($b <= 7)){
            echo "Pulou a execução $b <br>";
            
        }
        else{
            echo "Executando o loop $b <br>";
        }
        
        $b--;
    }
    