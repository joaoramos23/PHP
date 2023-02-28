<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>listar</title>
  <link rel="shortcut icon" href="img/check.jpg" type="image/x-icon">
  <style>
    .logo{
      height: 60px;
      margin-left: 5px;
    } 
    .menu{
      background-color: #121212;
      color: white;
      display: flex; 
      flex-direction: row;
      align-items: center;
      justify-content: space-between;  /* Ele dá os espaços entre as caixas */
      height: 6rem;
      margin: -15 -7.8;
      font-family: arial, Helvetica, sans-serif;
    }
    .menu > a{
      text-decoration: none; /*Tira o sublinhado do link */  
      color: white;
    }
    .menu_header{
      display: flex; 
      list-style: none; /*Tira as bolinhas */
      gap: 3rem;
      align-items: center;
    }
    .menu_header> li> a{
      text-decoration: none; /*Tira o sublinhado do link */  
      color: white;
    }
    .nomeCheck{
      margin-bottom: 10px;
    }
    .button{
      display: inline-flex;
      justify-content: center;
      align-items: center;
      padding: 1rem 1rem;
      background-color: rgba(0, 0, 0, 0.11);
      box-shadow:  2px 2px 2px 1px white ;
      color: white;
      border-radius: .8rem;
    }
    .tabela{
      border: 5.5px solid black;
      text-align: center;
      gap: 10px;
    }
   
    .cadastro{
      background-color: #121212 ;
      color: white;
      border: solid;
      border-radius: 40px;
      width: 195px;
      padding: 85px;
      margin: auto auto;
    }
  </style>
</head>
<body>
  <?php 
    session_start();
    
  // echo ($_SERVER['REQUEST_METHOD']);
  ?>

  <header>
    <!-- Contando a partir do "nav", dentro de 1 caixa, temos 3 caixas -->
    <nav class="menu">
      <img src="menu/img/logo.jpg" alt="logo" class="logo">

        <ul class="menu_header">
            <li>
                <a href="index.php"><h3>Página principal</h3></a>
            </li>
        </ul>

        <a href="#" class="button">Contato</a>
    </nav>
  </header>

  <main>
      <!-- Passando pelo "post". Colocar o nome do item e depois a observação.
        "item" e "observação"  
    -->
    <form action="src/adicionar_item.php" method="post">
      <!-- <input type="hidden" name="arquivo" value="<?php echo         
      ($_SESSION['edit_checklist']);?>" > -->
      <nav class="tabela">
        <nav class="cadastro">
          <p> 
            Nome do arquivo:  
            <input type="text" name="arquivo" required>
            
          </p>  
    
          <p>
            Item:
            <input type="text" name="item" required >
            
          </p>

          <p>
            Observação:
              <input type="text" name="observacao" required >
              <br>
          </p>
          <p>
            <input type="submit" value="Adicionar" class="adicionar">
          </p>
        </nav>
      </nav>  
    </form>
  </main>
</body>
</html>





