<?php
    $num = [1,2,3,4];

    foreach($num as &$n){
        $n *= 2;
    }
    echo $n . "<br>";
    print_r($num);
