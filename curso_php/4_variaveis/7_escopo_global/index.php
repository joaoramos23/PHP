<?php
    $teste = "asd";

    echo $teste," teste global1<br>";

    if(5 > 2){

        $teste = "dsa";
        echo $teste," teste if<br>";
    }

    echo $teste," teste global2<br>";

    function fucao(){

        $teste = "xxxx";
        echo $teste," teste local<br>";
    }

    fucao();

    function testandoGlobal(){

        $teste = 123;
        echo $teste," teste local<br>";

        global $teste;
        echo $teste," teste funcao chamando global<br>";

        $teste = 2;
        echo $teste," teste funcao chamando global e alterando <br>";
    }

    testandoGlobal();
    echo $teste," teste global3<br>";
?>