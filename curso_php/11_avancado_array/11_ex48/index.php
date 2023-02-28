<?php   
    $alimentos =["batata","maça","feijão","arroz","Pepino","Alface","ovos"];

    $itemRemover = "ovos";
    $qntdAlimentos = count($alimentos);
    $p = 0;

    for($i = 0; $i < count($alimentos); $i++){
        if($alimentos[$i] == $itemRemover){
            $remover = array_splice($alimentos,$i,1);
        }else{
            $p++;
        }
    }
    if($p == $qntdAlimentos){
        echo "Item para exclusão não foi encontrado na lista.";
    }else{
        print_r($alimentos);
        echo "<br>";
        echo "Removidos: ";
        print_r($remover);
    }
    
