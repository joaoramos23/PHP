<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>listar</title>
  <style>
    body{
      background-color: #121212;
      color: white;
    }
    .hr{
      background-color: white;  
      color: white;
    }
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

    header>h1{
        text-align: center;
        margin-top: 27px;
    }
    td> a{
      text-decoration: none; /*Tira o sublinhado do link */  
      color: white;
    }
    td> a:hover{
      font-size: 1.5em;
    }
    .tabela{
      border: 1px solid black;
      display: flex;
      justify-content: center;
      color: white;
    }
  .container{
    height: 170px;
    background-color: #121212;
    color: white;   
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 407px;
    margin-left: -50px;
    margin-right: -50px;
  }
  .logos-footer{
    width: 45px;
    height: 30px;
  }
  </style>
</head>
<body>
  <!-- Cada página está contendo suas estilizações -->
  <!-- Cabeçalho da página -->
  <header>
        <!-- Contando a partir do "nav", dentro de 1 caixa, temos 3 caixas -->
        <nav class="menu">
          <img src="menu/img/logo.jpg" alt="logo" class="logo" >

            <ul class="menu_header">
                <li>
                    <a href="index.php"><h3>Página principal</h3></a>
                </li>
            </ul>
            <a href="#" class="button">Contato</a>
        </nav>
        <hr class="hr">
  </header>

  <!-- No conteúdo da página criamos uma tabela de forma dinâmica. Essa tabela era mostrará os checklists criados. Ao lado desses checklist, temos as opções do que pode ser feito
  nele. Exemplo: Ver, editar e excluir. Quando clicado, cada um irá para uma página específica para aquilo. Usamos para percorrer os checklist criados, uma estrutura de repetição
  o "while". Percorrerá até a variável $i ser menor ou igual ao $tamanho. $tamanho pegamos com  a função "count()". Como "array_shift()" elimina o primeiro valor, usamos o 
  "substr()" e passando a lógica de $i-1 para pegar esse valor "eliminado".   -->
  <?php
      $checklists = scandir("src/checklist"); 
      array_shift($checklists);
      array_shift($checklists);
      $tamanho  = count($checklists);   
      // if($_GET['delete'] != NULL and $_GET['delete'] !=''){
      //   echo($_GET['delete']);      
      // }
  ?>
  <main>
    <table class="tabela">
      <tr>
        <td>Nº/</td>
        <td>Checklist/</td>
        <td>Opções</td>
      </tr>
      <?php
        $i = 1;
        while($i <= $tamanho){
      ?>
        <tr>
          <td><?php echo($i); ?>:</td>
          <td><?php echo(substr($checklists[$i-1], 0, -4)); ?></td>
          <td>
            <a href="exibir.php?arquivo=<?php echo($checklists[$i-1]);?>">Ver</a> |
            <a href="editar.php"> Editar | </a>
            <a href="src/deletefile.php?arquivo=<?php echo($checklists[$i-1]);?>">Remover</a><br>
            <?php echo "---------------------------";?>
          </td>
        </tr>
      <?php 
          $i++;
      }
      ?>
    </table>
    <hr class="hr"> 
  </main>
   
  <!-- Rodapé da página -->
  <footer>
        <div class="container">
          <ul>
            <li><h3>A empresa</h3>
              <p>Empresa competente, sempre em busca de melhoria dos nossos serviços e satisfazer os nossos clientes com bom trabalho e prestação de serviços.</p>
            </li>
            <li><h3>Contato</h3>
              <img  src="img/facebook.png" alt="logo-facebook" class="logos-footer">
              <img src="img/instagram.png" alt="logo-instagram" class="logos-footer">
              <img src="img/whats.png" alt="logo-whatsapp" class="logos-footer">
            </li>
          </ul>
        </div>
    </footer>
</body>
</html>





<!-- -->

