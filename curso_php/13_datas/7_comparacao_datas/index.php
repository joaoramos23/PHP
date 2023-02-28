<?php 

    $data = new DateTime();
    $dataFuturo = new DateTime();

    $dataFuturo->setDate(2024,6,3);

    print_r($data);
    echo "<br>";
    
    print_r($dataFuturo);
    echo "<br>";

    if($data > $dataFuturo){
        echo "Data atual é maior que a outra <br>";
    }else{
        echo "Data futura é maior que a outra <br>";
    }