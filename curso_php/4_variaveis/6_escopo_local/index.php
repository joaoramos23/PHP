<?php

    $x = 10;

    echo $x," global <br>";

    teste();

    echo $x," global <br>";

    teste();
    
    testando();
    //FUNCOES

    function teste(){
        $x = 5;

        echo $x," local <br>";
    }

    function testando(){
        $x = 2.5;

        echo $x," local2 <br>";
    }
?>      