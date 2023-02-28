<?php
    print_r($_POST);

    $opcao = 0;
    $precoFinal = "Insira um preço!";
    
    if(!empty($_POST)){
        if(!empty($_POST["opcionais"])){
            $opcao = count($_POST["opcionais"]);
        }else{
            $opcao = 0;
        }
       

        if(!empty($_POST["preco"]) or $_POST["preco"] == 0){
  
            $precoCarro = intval($_POST["preco"]);
            $precoOp = ($opcao * 500);
            $precoFinal = $precoCarro + $precoOp;
            
            
        }else{
            $precoOp = ($opcao * 500);
            $precoFinal = "Insira o preço do carro! Os opcionais deram: R$ $precoOp";
        }
    }
    

    
    
   

    

    
    
    

    