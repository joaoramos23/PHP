<?php
    $arr = range(1,30,2);

    function soma($a,$b){
        return $a + $b;
    }
    $resultado = array_reduce($arr,"soma");

    print_r($arr);
    echo "<br>" . $resultado;