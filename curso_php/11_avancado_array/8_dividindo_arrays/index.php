<?php
    $arr = range(1,20);

    print_r(array_chunk($arr,4));

    $dados = array_chunk($arr,10);
    echo "<br>";
    print_r ($dados);

    echo $dados[1][5];
