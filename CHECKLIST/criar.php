<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CheckList Mania</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
        <div class="container3">

            <div class="child4">
                <div class="botaovoltar">
                    <a href="index.php">Voltar</a>
                </div>
            </div>
            
            <div class="criacao">
                <header id="cabecalho">
                    <h1>Criar Checklist</h1>
                </header>

                <div id="formchecklist">

                    <form name="criarChecklist" method="GET"
                    action="php/createfile.php" class="forms">

                        <div id="formulario">
                            <label for="nomechecklist">
                                Nome checklist:
                            </label>
                            <input type="text" name="nomeChecklist" id="caixabranca" placeholder="Nome do checklist" required>
                        </div>

                        <div id="btn">
                            <input type="submit" value="Criar" id="criarbtn">
                        </div>

                    </form>
                </div>
            </div> 
        </div>   
</body>
</html>