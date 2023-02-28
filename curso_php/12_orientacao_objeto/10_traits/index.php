<?php
    trait Objeto{
        public $y = 10;

        public function falar(){
            echo "Testando uma trait. <br>";

        }
    }

    class Central{

        use Objeto;

    }

    $x = new Central;

    $x->falar();
    echo $x->y . "<br>";