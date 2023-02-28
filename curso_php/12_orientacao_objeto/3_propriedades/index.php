<?php 

    Class Car{

        public $roda = 4;
        public $porta = 2;

    }

    $corsa = new Car;
    $saveiro = new Car;

    echo $corsa->roda . "<br>";

    $corsa->roda = 5;

    echo $corsa->roda . "<br>";
    echo $saveiro->roda . "<br>";