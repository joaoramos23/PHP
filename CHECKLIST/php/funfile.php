<?php 

  function criarArquivo($nome){
    fopen('salvarChecklist/'.$nome,'w');
  }

  function lerArquivo($arquivo){
    $file = fopen($arquivo, 'r');
    return $file;
  }

  function deletarArquivo($arquivo){
    return unlink('salvarChecklist/'.$arquivo);
  }
   
?> 