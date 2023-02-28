<?php 
  function criar_arquivo($nome){
    fopen('checklist/'.$nome,'w');
  }
  
  function ler_arquivo($arquivo){
    $file = fopen($arquivo, 'r');
    return $file;
  }

  function deletar_arquivo($arquivo){
    //Abri o arquivo auditoria.log no modo de escrita
    //Registrar que o arquivo está sendo deletado
    //Fechar o arquivo.
    return unlink('checklist/'.$arquivo);
  }
 
?> 

