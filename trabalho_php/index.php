<?php
$dados = [];


function receberDados($a,$b){
    global $dados;
    static $i;
    static $j;
    static $x;

    for($i = 0; $i < count($dados); $i++){
        for($j = 0; $j < count($dados); $j++){
            $dados[$i][$j] = $x;
            $dados[$i][$j + 1] = $a;
            $dados[$i][$j + 2] = $b;
        }
    }
    
    print_r($dados);
}

    receberDados("João",23);
    receberDados("Alcivan",29);