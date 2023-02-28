<?php
    $arr = range(10,45);

    for($i = 0; $i < count($arr); $i++){
        $soma = $arr[$i] + 6;
        echo $soma;
        if($soma > 30){
            echo " valor muito alto.<br>";
        }else{
            echo " valor normal.<br>";
        }
    }