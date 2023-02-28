<?php
    date_default_timezone_set("America/Sao_Paulo");

    $a = 0;
    $b = "days";


    function dataAtual($a,$b){
        $acrescimo = strtotime($a . $b);
        $data = date ("d/m/y", $acrescimo);

        return $data;
    }
    


    echo dataAtual(strval($a),strval($b));
    
   