<?php
  $arquivo = $_POST['arquivo'].'.txt';
  $item = $_POST['item'];
  $observacao = $_POST['observacao'];
 
  if (file_exists('salvarChecklist/'.$arquivo)){
    $data = $item. PHP_EOL .$observacao. PHP_EOL;
    $arquivo = fopen('salvarChecklist/'.$arquivo,'a');
    fwrite($arquivo, $data);  
    // fwrite($arquivo, $observacao. PHP_EOL);
    fclose($arquivo);
  }
  else{
?>
    <script>
      window.location.href = "../checklist.php";
      alert("Arquivo inexistente.")
    </script> 
<?php
  }
?>

<script>
  window.location.href = "../checklist.php";
  alert("Arquivo editado com sucesso!");
</script> 

<?php 