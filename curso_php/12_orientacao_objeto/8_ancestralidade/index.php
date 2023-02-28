<?php 

    Class Humano{

    }

    Class Pessoa extends Humano{

    }

    $joao = new Humano;
    $marcos = new Pessoa;

    if($marcos instanceof Humano){
        echo "marcos é humano <br>";
    }

    if ($joao instanceof Pessoa){
        echo "joao é uma pessoa <br>";
    }
    else{
        echo "joao não é uma pessoa";
    }