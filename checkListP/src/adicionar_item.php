<?php
  $arquivo = $_POST['arquivo'].'.txt';
  $item = $_POST['item'];
  $observacao = $_POST['observacao'];
 
  if (file_exists('checklist/'.$arquivo)){
    $data = $item. PHP_EOL .$observacao. PHP_EOL;
    $arquivo = fopen('checklist/'.$arquivo,'a');
    fwrite($arquivo, $data);  
    // fwrite($arquivo, $observacao. PHP_EOL);
    fclose($arquivo);
  }
  else{
?>
    <script>
      window.location.href = "../listar.php";
      alert("Arquivo inexistente.")
    </script> 
<?php
  }
?>

<script>
  window.location.href = "../listar.php";
  alert("Arquivo editado com sucesso!");
</script> 



<?php 
?>