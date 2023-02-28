<html>
  <html lang="pt-br">
  <head>
  <link rel="shortcut icon" href="img/check.jpg" type="image/x-icon">
    <title>PHP Test</title>
    <style>
      body{
      background-image: url("css/img/background.jpg");
      }
      h1{
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        font-size: 50px;
        text-shadow: 1px 1px 5px black;
      }
      .cadastro{
        
        color: white ;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 25px;
        color: white;
        border: solid;
        border-radius: 5px;
        padding: 85px;
        margin: auto auto;
        width: 500px;
        height: 400px;
        background-color: rgba(0, 0, 0, 0.75);
      }
      .voltar{
        text-align: center;
      }
      .voltar2{
         text-decoration: none; /*Tira o sublinhado do link */  
        color: white;
      }
    </style>
  </head>
  <body>
 
    <h1>ITENS DO CHECKLIST: </h1>
    <div class="cadastro"> 
      <?php
      
        require("php/funfile.php");
        if(file_exists('php/salvarChecklist/'.$_POST['relatorio'].'.txt')){
          $arquivo = 'php/salvarChecklist/'.$_POST['relatorio'].'.txt';
          $handle = lerArquivo($arquivo);
          $i=1;
            while(!feof($handle)){
              $resto= ( $i % 2);
              $linha = fgets($handle);
            
              if($resto == 1 and $linha != false){ 
      ?> 
                <?php echo" - ". $linha; ?>
      <?php
              }else{echo $linha;}
                $i++;
              }
            } 
            else{
               echo 
              "<script> 
                alert('Arquivo não existe')
                window.location.href = 'listar.php'
              </script>";
            }
      ?>  
    </div> 
  <!-- Função que faz o relatório -->
  <script>
    function printpage(){
      window.print();
    }
    alert("Relatório sendo gerado")
    printpage();
  </script>
  </body>
