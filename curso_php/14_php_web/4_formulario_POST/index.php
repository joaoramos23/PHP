<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO POST</title>
</head>
<?php include_once("cadastro.php");?>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value = "Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value = "Ar Condicionado">Ar Condicionado
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value = "Pelicula">Pelicula
        </div>
        
        <div><input type="submit" value="Enviar"></div>
    </form>
    <div>
        <h4>CADA ADICIONAL SOMA R$500,00 NO VALOR DO CARRO!<br>ADICIONAIS:</h4>

        <ol>
            <?php for($i = 0; $i < $opcao; $i++): ?>
                <li>
                    <?= $_POST["opcionais"][$i]?>
                </li>
            <?php endfor; ?>
        </ol>
        
        <h5>PREÇO FINAL: R$ <?= $precoFinal ?></h5>
    </div>
</body>
</html>