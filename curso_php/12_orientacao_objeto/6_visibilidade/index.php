<?php 

   trait CadastrarFuncionario{
        public $nome;
        public $id;

        public function cadastrarFuncionario($a,$b){

            $this->nome = $a;
            $this->id = $b;

        }

        public function exibirFuncionario(){
            echo "Nome: $this->nome. <br>Id: $this->id <br>";
        }
   }

   trait CadastrarCarro{

        public $nomeCarro;
        public $marcaCarro;
        public $corCarro;
        public $motorCarro;

        public function cadastrarCarro($a,$b,$c,$d){

            $this->nomeCarro = $a;
            $this->marcaCarro = $b;
            $this->corCarro = $c;
            $this->motorCarro = $d;

        }
   }

   class Cadastrar{
        use CadastrarFuncionario;
        use CadastrarCarro;

        public function exibirCarro(){
            echo "Nome Funcionario: $this->nome<br>Nome Carro: $this->nomeCarro. <br>Marca: $this->marcaCarro <br>Cor: $this->corCarro <br>Motor: $this->motorCarro <br>";
        }
   }

   $joao = new Cadastrar;
   $joao->cadastrarFuncionario("João",12345);
   $joao->exibirFuncionario();

   echo "____________________________________<br><br>";
   echo "________CADASTRO CARRO__________<br>";
   echo "____________________________________<br>";
   $joao->cadastrarCarro("Celta","Chevrolet","Preto",2.5);
   $joao->exibirCarro();