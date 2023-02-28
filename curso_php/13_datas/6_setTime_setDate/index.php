<?php

    $data = new DateTime();
    $dataModify = new DateTime();
    $dataSetDate = new DateTime();

    $dataModify->modify("-11days");
    $dataSetDate->setDate(2022,12,31);

    echo $data->format("d/m/Y") . "<br>";
    echo $dataModify->format("d/m/Y") . "<br>";
    echo $dataSetDate->format("d/m/Y") . "<br>";

    print_r($dataSetDate);
    echo "<br>";

    $dataSetDate->setTime(25,00,00);

    print_r($dataSetDate);
    echo "<br>";
    
    # DIFERENÇA DE DATAS COM O DIFF, %R = SE POSITIVO OU NEGATIVO / %a a quantidade / pode retornar um bolean = false #

    
    $diferenca = $dataSetDate->diff($data);
    print_r($diferenca);
    echo "<br>";


    echo $diferenca->format("%R%a days");
