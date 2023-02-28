<?php 
  session_start();
  $_SESSION['edit_checklist'] = $_GET['arquivo'];  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CheckList Mania</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<style>
    #editar{
        padding-left: 5px;
        display: flex;
        color: #FFFFFF;
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    }

    #editar2{
        padding-left: 15px; 
    }

    #formchecklist2{
        color: #FFFFFF;
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;   
    margin-top: 25px;
    border: 1px solid rgba(255, 255, 255, 0.4);
    border-radius: 5px;
    }
</style>
<body>
        <div class="container2">

            <div class="child3">
                <div class="botaovoltar">
                    <a href="checklist.php">Voltar</a>
                </div>
            </div>
            
            <div class="child2">
                <header id="cabecalho">
                    <h1>Exibição</h1>
                </header>
                    <?php
                        require("php/funfile.php");
                        $arquivo = 'php/salvarChecklist/'.$_GET['arquivo'];
                        $handle = lerArquivo($arquivo);
                        $i = 1;
                        while(!feof($handle)){
                        $resto = ($i % 2);
                        $linha = fgets($handle);
                        if($resto == 1 and $linha != false){
                    ?>
                    <div id="editar">
                        <input type="checkbox" name="item1">
                        <div id="editar2"><?php echo $linha."<br>"; ?></div>
                    </div>
                    <?php
                        }
                     $i++;
                    }
                    ?>

                <div class="botaoadicionar">
                    <a href="adicionar.php">Adicionar item</a>
                </div>

                <div id="formchecklist2">

                <form action="relatorio.php" method="post"  target="_blank" class="relatorio">

                <div id="formulario">
                        <h2>Criar relatório: </h2>
                        <input type="text" id="caixabranca" name="relatorio" required> 

                        <div id="btn">
                            <input type="submit" value="Criar" id="criarbtn">
                        </div>

                    </form>
                </div>
                </div>
            </div>
        </div>   
</body>
</html>