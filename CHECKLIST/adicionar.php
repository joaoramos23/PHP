<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CheckList Mania</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
        <div class="container2">

            <div class="child3">
                <div class="botaovoltar">
                    <a href="checklist.php">Voltar</a>
                </div>
            </div>
            
            <div class="criacao">
                <header id="cabecalho">
                    <h1>Adicionar</h1>
                </header>

                <div id="formchecklist">

                    <form action="php/adicionaritem.php" method="post" class="forms">
                        <input type="hidden" name="arquivo" value="<?php echo ($_SESSION['edit_checklist']);?>" >

                            <div id="formulario">
                                <label for="item">
                                    Arquivo:
                                </label>
                                <input type="text" name="arquivo" id="caixabranca">
                            </div>
                            <div id="formulario">
                                <label for="item">
                                    Item:
                                </label>
                                <input type="text" name="item" id="caixabranca">
                            </div>
                            <div id="formulario">
                                <label for="observacao">
                                    Observação:
                                </label>
                                <input type="text" name="observacao" id="caixabranca">
                            </div>   
                            </div>

                            <<div id="btn">
                            <input type="submit" value="Adicionar" id="criarbtn">
                            </div>

                    </form>

                </div>

            </div>
        </div>   
</body>
</html>