<?php

    $idade = [15,12,19,0,11];
    
    print_r($idade);
    echo "<br>";
    print_r($idade[3]);
    echo "<br>";
     
    echo $idade[4],"<br>";
    echo $idade[1],"<br>";

    $misturando = ["João", 1 , true];
    print_r($misturando);
    echo "<br>";

    if(is_bool($misturando[2])){ 
        echo "O array na posição 2 é boolean!<br>";
    }
    
    if(is_int($misturando[2])){ 
        echo "O array na posição 2 é boolean!<br>";
    }
?>