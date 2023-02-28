<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO GET</title>
</head>

<?php include_once("processamento.php");?>

<body>
    <form action="index.php" method="GET">
     <div>
        <input type="text" name="nome" placeholder="Informe seu nome" autocomplete="off"> 
     </div> 
     <div>
        <input type="text" name="idade" placeholder="Informe sua idade" autocomplete="off">
     </div>  
     <br>
     <div>
        <input type="submit" value="Enviar">
     </div>
     <div>
        <br>Nome: <?= $nome ?></br>
        <br>Idade: <?= $idade ?></br>
     </div>
    </form>
</body>
</html>







