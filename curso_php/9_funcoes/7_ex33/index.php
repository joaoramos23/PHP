<?php   

    function nameAndYear($name,$year,$gender){
        if((is_string($name)) and (is_int($year))){
            echo("Olá eu sou $gender $name e tenho $year anos.<br>");
        }
        else{
            echo "Porfavor insira os dados corretamente, primeiro nome e depois idade.<br>";
        }
        

    }

    nameAndYear("João",23,"o");
    nameAndYear(23,"João","o");
    nameAndYear(23,23,"o");
    nameAndYear("João","João","o");
    nameAndYear("Maria",29,"a");
    