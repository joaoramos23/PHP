<?php
    $checklists = scandir("php/salvarChecklist"); 
    array_shift($checklists);
    array_shift($checklists);
    $tamanho  = count($checklists);  
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
                    <a href="index.php">Voltar</a>
                </div>
            </div>
            
            <div class="child2">
                <header id="cabecalho">
                    <h1> Checklists</h1>
                </header>

                <table>

                    <tr>
                        <td>Nº</td>
                        <td>Nome Checklist</td>
                        <td>Opções</td>
                    </tr>

                    <?php
                        $i = 1;
                        while($i <= $tamanho){  
                    ?>

                        <tr>
                            <td>
                                <?php echo($i); ?>
                            </td>

                            <td>
                                <?php echo(substr($checklists[$i-1], 0, -4)); ?>
                            </td>

                            <td>
                                <a href="ver.php?arquivo=<?php echo($checklists[$i-1]);?>">Ver</a> 
                                <a href="adicionar.php?arquivo=<?php echo($checklists[$i-1]);?>">Adicionar</a>
                                <a href="php/del.php?arquivo=<?php echo($checklists[$i-1]);?>">Remover</a></td>
                            </td>
                        </tr>

                    <?php         
                        $i++;
                        }
                    ?>
                </table>
            </div>
        </div>   
    </body>
</html>