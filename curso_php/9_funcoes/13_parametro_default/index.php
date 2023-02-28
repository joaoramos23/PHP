<?php
    $a = "Joao";

    function teste($a = "teste"){
        echo "$a <br>";
    }

    teste();
    teste($a);

    // boa pratica por sempre os default a direita!
    function teste2($b, $a = "teste"){
        echo "default: $a e não default: $b <br>";
    }
    
    teste2(13);
    teste2("João");
    teste2("João","Fernando");