<?php
  require ("functionfile.php");   
  extract($_GET);
  
  if(deletar_arquivo($arquivo)){    
?>
  <script>
     window.location.href = "../listar.php?delete=Arquivo deletado com sucesso!";
   </script>
<?php
  
  }else{
?>
   <script>
     window.location.href = "../listar.php?delete='Erro:: Arquivo não deletado!";
   </script>
<?php   
  }
?>
