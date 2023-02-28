<?php

    $casa = [];
    $receberArr;

    for($i = 10; $i <= 20;$i++){
        array_push($casa,$i);
    }
    
    print_r($casa);
    echo "<br>";
 
    for($i = 0; $i < count($casa);$i++){

        $receberArr = $casa[$i];

        if($receberArr % 2 != 0){
            echo "$receberArr é impar!<br>";
        }
    }
        
    
    

