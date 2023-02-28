<?php 
class Cachorro{

    public $nome;
    public $raca;
    public $idade;

    public function __construct($a,$b,$c){
        $this->nome = $a;
        $this->raca = $b;
        $this->idade = $c;
    }

    public function mostrar($a){
        echo $this->$a . "<br>";
    }

}

$nick = new Cachorro("Nick","Puddle",16);

$nick->mostrar("nome");
$nick->mostrar("raca");
$nick->mostrar("idade");
    