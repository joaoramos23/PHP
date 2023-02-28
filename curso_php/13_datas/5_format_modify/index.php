<?php 

$data = new DateTime();
$datamod = new DateTime();

$datamod->modify("5days");
$data->modify("3days");

echo "Hoje é dia " . $data->format("d") . ", do mês " . $data->format("F") . " e ano " . $data->format("Y"). ".<br>";

echo $data->format("d/m/y") . "<br>";
echo $datamod->format("d/m/y") . "<br>";
echo $data->format("d/m/y") . "<br>";

