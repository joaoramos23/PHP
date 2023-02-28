<?php
    $casa;
    $cont = 10;
    $i = 0;

    while(($cont >= 10) and ($cont <= 100)){

        $casa[$i] = $cont;
        $cont += 10;
        $i++;
    } 

    print_r($casa) . "<br>";

    $i = 0;
    echo "<br>";
    while($i < count($casa)){

        if(($casa[$i] == 30) or ($casa[$i] == 40)){
            
            echo "$casa[$i] Pulou execução do loop.<br>";
            $i++;

            continue;
        }

        echo "$casa[$i] Executando loop!<br>";
        $i++;
    }
 