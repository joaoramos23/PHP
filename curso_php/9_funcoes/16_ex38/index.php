<?php
    $itens = [];

    function superMarket($a){
        global $itens;
        static $i;
        
        $itens[$i] = $a;
        $i++;
    }


    superMarket("Feijão");
    superMarket("Arroz");
    superMarket("Uva");
    superMarket("Abacaxi");
    
    echo "Você levou estes itens do mercado: ". implode(", ",$itens) . ".";