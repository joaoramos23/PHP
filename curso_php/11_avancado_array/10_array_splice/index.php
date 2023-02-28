<?php
    //RESGATAR ELEMENTOS DE ARRAY

    //REMOVENDO ELEMENTOS DE ARRAY

    $arr = range(1,6);

    print_r($arr);
    echo "<br>";

    $removidos = array_splice($arr, 1,-1);

    print_r($arr);
    echo "<br>";
    echo "Removidos: <br>";
    print_r($removidos);
    echo "<br>";