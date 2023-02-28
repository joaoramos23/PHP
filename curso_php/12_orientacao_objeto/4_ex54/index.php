<?php 

    Class Pessoa{
        
        public $nome;
        public $idade;
        public $metros;

        public function andar(){
             echo "Andou: $this->nome andou $this->metros metros <br>";
        }

        public function criarPessoa($nomePessoa,$idadePessoa,$metrosPecorridos){
            $this->nome = $nomePessoa;
            $this->idade = $idadePessoa;
            $this->metros = $metrosPecorridos;
        }

        public function apresentarPessoa(){
            echo "Nome: " . $this->nome . "<br>";
            echo "Idade: " . $this->idade . "<br>";
            $this->andar() . "<br>";
        }
    }

    $joao = new Pessoa;
    $joao->criarPessoa("João",23,50);

    $pedro = new Pessoa;
    $pedro->criarPessoa("Pedro",39,500);

    $fernanda = new Pessoa;
    $fernanda->criarPessoa("Fernanda",30,5000);


    $fernanda->apresentarPessoa();
    echo "<br>";
    $pedro->apresentarPessoa();
    echo "<br>";
    $joao->apresentarPessoa();
    echo "<br>";
    

    