<?php

   class Pessoa{

        function falar(){
            echo "Olá, eu sou um objeto!<br>";
        }

        function somar($a,$b){
            echo $a + $b . "<br>";
        }

   } 

   $joao = new Pessoa;
   $fernando = new Pessoa;


   $joao->falar();
   $fernando->somar(3,4);
   $joao->somar(5,5);
