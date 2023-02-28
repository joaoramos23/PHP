<?php

    function soma($a, $b){

        var_dump(func_get_args());
        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b;
    }

    echo soma(5, 3);