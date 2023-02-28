<?php 
  session_start();
  $_SESSION['edit_checklist'] = $_GET['arquivo'];  
?>
<html>
  <head>
    <title>PHP Test</title>
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
        height: 7.6rem;
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
      main{
        margin-top: 75px;
      }
      .listar{
        text-align: center;
        color: black;
        font-size: 1.5em;
      }
      .listar > a{
        text-decoration: none; /*Tira o sublinhado do link */  
        color: black;
      }
      .listar > a:hover{
        border: solid;
        border-radius: 9px;
        background-color: rgba(0, 0, 0, 0.11);
        box-shadow: 2px 2px 2px 1px white ;
        width: 5px;
        padding: 3.5px;
        font-size: 1.5em;
      }
      main> nav> a{
        text-decoration: none; /*Tira o sublinhado do link */  
        color: white;
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
    
      .container{
        height: 170px;
        background-color: #121212;
        color: white;   
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 92px;
        margin-left: -50px;
        margin-right: -50px;
      }
      .logos-footer{
        width: 45px;
        height: 30px;
      }
      .form-submit-button {
	      background-color: white;
      	color: black;
      	border-style: outset;
      	border-color: black;
      	height: 24.5px;
      	width: 68px;
      	font: bold 15px arial,sans-serif;
      	text-shadow: none;
      }
      .relatorio{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- Cabeçalho da página -->
      <!-- Contando a partir do "nav", dentro de 1 caixa, temos 3 caixas -->
      <nav class="menu">
        <img src="menu/img/logo.jpg" alt="logo" class="logo">
  
          <ul class="menu_header">
              <li>
                  <a href="index.php"><h3>Página principal</h3></a>
                   <a href="editar.php"><h3 style="margin-left: 48px;">Editar</h3></a>
              </li>
          </ul>
  
          <a href="#" class="button">Contato</a>
      </nav>
    </header>

    <!-- Conteúdo da página -->
    <main>
      <!-- Dando a opção de voltar para a lista -->
        <p class="listar">
          <a href="listar.php">Retornar para lista de Checklist.</a>
        </p>
      <nav class="cadastro"> 
          <br>
          <!-- Para exibir o que há no arquivo, pegamos como parâmetro o nome do arquivo por "$_GET" que vem do listar.php.
          Fazendo a inclusão do arquivo "functionfile" para usar a função "ler_arquivo()"; Essa função recebe a variável $arquivo, que é o nome que pegamos pelo GET. E quem recebe o contéudo disso é
          a variável $handle. Pelo "while" colocamos a função feof() que avisa quando o arquivo chegou no final. Porém, como no arquivo sempre tem o item e a observação, criamos 
          uma lógica que só pega o "item". Para isso inicializamos o $i recebendo 1, e cada vez que o while rodava, ele ganhava mais um. Se ele rodasse, e o resto da divisão fosse 0, 
          ele não exibia. Pois as "observações" sempre estão em linhas pares. O "$linha != false" serve para não deixar "input's' sobrando, pois estava aparecendo sem valor algum.
        -->
        <?php
            require("src/functionfile.php");
            $arquivo = 'src/checklist/'.$_GET['arquivo'];
            $handle = ler_arquivo($arquivo);
            $i = 1;
            while(!feof($handle)){
              $resto = ($i % 2);
              $linha = fgets($handle);
              if($resto == 1 and $linha != false){
          ?>
            <input type="checkbox" name="item1">
            <?php echo $linha."<br>"; ?>
          <?php
              }
              $i++;
            }
        ?>  
      </nav>   
    </main>

    <!-- Form para criar relatório, passando por "post". -->
    <footer>
      <form action="relatorio.php" method="post"  target="_blank" class="relatorio">
        <h2>Criar relatório</h2>
          <input type="text" name="relatorio" required> 
          <input type="submit" value="criar"  class="form-submit-button">
      </form>
    </footer>
    
  </body>
</html>




