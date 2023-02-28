<?php

    for($i = 0; $i < 3; $i++){

        for($j = 0; $j < 4; $j++){
            $arr[$i][$j] = $j;
        }
    }
    for($i = 0; $i < 3; $i++){

        echo "Imprimindo array externo:" . ($i + 1) . "<br>";
        for($j = 0; $j < 4; $j++){
            echo $arr[$i][$j] . " "; 
        }
        echo "<br>";
    }
