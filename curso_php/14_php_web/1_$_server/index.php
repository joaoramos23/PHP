<?php
    date_default_timezone_set("America/Sao_Paulo");

    $date = new DateTime();

    print_r($_SERVER);

    echo "<br><br><br>";

    $data = $_SERVER["REQUEST_TIME"];

    echo "A data de hoje é: " . $date->format("d/m/y");

    echo "<br>";

    if($_SERVER["SERVER_NAME"] == "localhost"){
        echo "Você está acessando localhost! Na data de: " . $date->format("d/m/y");
    }
 
