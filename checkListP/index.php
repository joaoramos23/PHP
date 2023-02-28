<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link rel="shortcut icon" href="img/check.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Usando o "header" para dizer que é o cabeçalho da página e o "main"  para dizer que é o conteúdo da página -->
    <!-- Cabeçalho da página -->
    <header>
          <!-- Contando a partir do "nav", dentro de 1 caixa, temos 3 caixas -->
          <nav class="menu">
            <img src="menu/img/logo.jpg" alt="logo" class="logo" >

              <ul class="menu_header">
                  <li>
                      <a href="menu/cadastro.html"><h3 style="margin-left: 78px;">Cadastre-se</h3></a>
                  </li>
                  
              </ul>

              <a href="#" class="button">Contato</a>
          </nav>
        
    </header>
  <hr class="hr">

    <!-- Conteúdo da página. 2 forms, um para criar o checklist e o outro para listar o que já foram criados.
    O de criar, vai primeiro para o createfile, lá faz a validação para ver se já existe ou não. Caso exista, ele dá um alerta e retorna para a página. -->
    <main>
      <div class="cadastro">
        <form action="src/createfile.php" method="get">
          <h2 style="margin-left: 21px;">Criar checklist:</h2 > 
          <input type="text" name="nome" required style="margin-left: 14px;"> 
            <input type="submit" value="CRIAR"  class="form-submit-button" style="margin: 30px; margin-left: 59px;">   
        </form>
        <!-- Form que vai para a listagem de checklist que já foram criados. -->
        <form action="listar.php" method="get">
          <h2 style="margin-left: 51px;">Criadas:</h2>
          <input type="submit" value="LISTAR" class="form-submit-button" style="  margin: 5px; margin-left: 64px;">
        </form> 
      </div>
    </main>
    <!-- <footer>
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
    </footer> -->
  </body>
</html>
