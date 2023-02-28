<?php

    $a = 10;

    function teste(){
        $a = 5;

        echo "Local $a.<br>";

        global $a;
        
        echo "Global $a.<br>";
    }

    teste();