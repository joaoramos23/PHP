<?php
    $arr = range(1,25,3);

    print_r($arr);
    echo "<br>";

    $resg1 = array_slice($arr,2,6);

    print_r($resg1);
    echo "<br>";

    $resg2 = array_slice($arr,2,2);

    print_r($resg2);
    echo "<br>";

    $resg3 = array_slice($arr,6);

    print_r($resg3);
    echo "<br>";

    $resg4 = array_slice($arr,3,-3);

    print_r($resg4);
    echo "<br>";

    $resg5 = array_slice($arr,3,3);

    print_r($resg5);
    echo "<br>";