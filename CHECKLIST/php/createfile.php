<?php 

require ("funfile.php");  
if(file_exists('salvarChecklist/'.$_GET['nomeChecklist'].'.txt')){
   echo 
    "<script> 
      alert('Arquivo já existe')
      window.location.href = '../criar.php'
    </script>";
}
else{ 
  criarArquivo($_GET['nomeChecklist'].'.txt');
  echo 
    "<script>
      alert('Arquivo criado com sucesso!')
      window.location.href = '../criar.php'
    </script>";
}
?>


    
