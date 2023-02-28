<?php
    
 // ESCOPO LOCAL

    function teste(){
        $a = 0;
        $a++;

        echo $a,"<br>";
    }

    teste();
    teste();
    teste();
    
 // ESCOPO GLOBAL

    $a = 3;
    
    echo "<br>";

    function testeGlobal(){
        global $a;
        $a++;

        echo $a,"<br>";
    }

    testeGlobal();
    echo $a," global fora da funcao. <br>";
    testeGlobal();
    echo $a," global fora da funcao. <br>";
    testeGlobal();
    echo $a," global fora da funcao. <br>";

// ESCOPO STATIC

    echo "<br>";

    function testeStatic(){
        static $a = 0;
        $a++;

        echo $a,"<br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
    
?>