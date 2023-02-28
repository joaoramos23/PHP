<html>
  <html lang="pt-br">
  <head>
  <link rel="shortcut icon" href="img/check.jpg" type="image/x-icon">
    <title>PHP Test</title>
    <style>
    
      h1{
        text-align: center;
      }
      .cadastro{
        
        color: black ;
        border: solid;
        border-radius: 40px;
        width: 195px;
        padding: 85px;
        margin: auto auto;
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
 
    <h1>Itens do checklist:</h1>
    <div class="cadastro"> 
      <?php
      // Fazendo validação se o arquivo existe ou não. Caso não exista, não terá relatório e volta pra página de listas, não a de exibir. Pois, se não existe, não tem o que exibir.
        require("src/functionfile.php");
        if(file_exists('src/checklist/'.$_POST['relatorio'].'.txt')){
          $arquivo = 'src/checklist/'.$_POST['relatorio'].'.txt';
          $handle = ler_arquivo($arquivo);
          $i=1;
            while(!feof($handle)){
              $resto= ( $i % 2);
              $linha = fgets($handle);
            // Usando a mesma lógica só para colocar um "-" antes dos itens. Só para dar uma diferenciada mesmo de item para observação. Se o resto for 0, não terá esse tracinho.
              if($resto == 1 and $linha != false){ 
      ?> 
                <?php echo" - ". $linha."<br>"; ?>
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

  