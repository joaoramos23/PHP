<?php

    for($i = 0; $i <= 10; $i++){
        if($i == 4){
            echo 16 . "<br>";
    
            continue;
        }

        echo $i . "<br>";
        
        if($i == 8){
            break;
        }
        
    }