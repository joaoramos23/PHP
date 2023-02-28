<?php

    class Pessoa{
        public $nome;
        public $idade;

        function apresentar($a,$b){
            echo "Olá me chamo $a, tenho $b anos.<br>";
        }

        function andar($a){
            echo "Eu vou andar $a metros!<br>";
        }
    }

    $pessoaUm = new Pessoa;
    $pessoaDois = new Pessoa;

    $pessoaUm->nome ="João";
    $pessoaUm->idade =23;

    $pessoaUm->andar(50);
    $pessoaUm->apresentar($pessoaUm->nome,$pessoaUm->idade);

    $pessoaUm->nome ="Fernando";
    $pessoaUm->idade =61;
    $pessoaUm->apresentar($pessoaUm->nome,$pessoaUm->idade);
