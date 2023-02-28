<?php
    if(isset($_POST)){
        print_r($_POST);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKBOX</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingrediente[]" value="Tomate">Tomate
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Feijão">Feijão
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Ovos">Ovos
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Pepino">Pepino
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <h1>ITENS SELECIONADOS: </h1>
    <ol>
        <?php
        $salvar = null;
            if(!isset($_POST["ingrediente"])){
                $salvar = "Nenhum item selecionado!";
            }
            if(isset($_POST["ingrediente"])):
                for($i=0; $i<count($_POST['ingrediente']); $i++):
                    if($_POST["ingrediente"][$i] == "Tomate"){
                        $salvar = "Tem tomate";
                    }else{
                        if(isset($salvar)){

                        }else{
                            $salvar = "Não tem tomate";
                        }
                    }
        ?>
        <li>
                <?= $_POST['ingrediente'][$i] ?>
        </li>
        <?php endfor; ?>
        <?php endif; ?>
    </ol>
    <h1><?= $salvar ?></h1>
</body>
</html>