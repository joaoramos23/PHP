<?php
    $checar = true;
    $checar2 = false;

    if(is_bool($checar)){

        echo "É boolean!<br>";

    }
    if(is_bool($checar2)){

        echo "É boolean!<br>";

    }
    if(is_bool(1) == false){

        echo "Não é boolean!<br>";

    }

    if(0 == false){

        echo "Zero é falso!<br>";

    }
?>