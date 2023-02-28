<?php


    function parImpar($a){
        if($a % 2 == 0){
            echo "$a é um número PAR!<br>";
        }
        else{
            echo "$a é um número IMPAR!<br>";
        }
    }


    parImpar(13);
    parImpar(45);
    parImpar(24);
    parImpar(0);
    parImpar(-4);