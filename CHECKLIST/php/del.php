<?php
  require ("funfile.php");   
  extract($_GET);
  
  if(deletarArquivo($arquivo)){    
?>
  echo "<script>
     window.location.href = "../checklist.php?delete=Arquivo deletado com sucesso!";
   </script>";
<?php
  
  }else{
?>
   <script>
     window.location.href = "../checklist.php?delete='Erro:: Arquivo não deletado!";
   </script>
<?php   
  }
?>