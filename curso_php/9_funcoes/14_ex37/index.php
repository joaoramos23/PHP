<?php

    function defineCorCarro($cor = "Vermelho"){
        return "A cor do carro é: $cor <br>";
    }
    // com parametro default----------------------
    echo defineCorCarro();
    //--------------------------------------------

    echo defineCorCarro("Azul");

    echo defineCorCarro("Verde");
