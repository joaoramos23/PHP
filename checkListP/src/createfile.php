<?php 
  require ("functionfile.php");  
  if(file_exists('checklist/'.$_GET['nome'].'.txt')){
     echo 
      "<script> 
        alert('Arquivo já existe')
        window.location.href = '../index.php'
      </script>";
  }
  else{ 
    criar_arquivo($_GET['nome'].'.txt');
    echo 
      "<script>
        alert('Arquivo criado com sucesso!')
        window.location.href = '../ listar.php'
      </script>";~
      
  }
?>
