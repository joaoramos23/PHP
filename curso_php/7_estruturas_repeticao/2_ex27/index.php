<?php

    function add($a){
        
            static $cont = 0;
            global $coisas;

                $coisas[$cont] = $a;
                echo "Adicione: ";
                echo $coisas[$cont] . "<br>";
                $cont++;
    } 

    $coisas = null;
    $cont = 0;
    
        add("Minha");
        add("Pica");
        add("C");
        add(5);
        add(2);
        add(true);
        add("Minha");
        add("Pica");
        add("C");
        echo "<br>";
        
    while($cont < count($coisas)){

        if($cont == 2){
            break;
        }
        if(is_string($coisas[$cont])){
            echo "$coisas[$cont] é string!<br>";
        }
        $cont++;
    }