<?php
    $usuario = [
        'nome' => 'Joao',
        'idade' => 29,
        'profissao' => 'Programador'
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREENCHIMENTO DE FORM</title>
</head>
<body>
    <form action="">
        <div>
            Nome: <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            Idade: <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
        <div>
            Profissão: <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>