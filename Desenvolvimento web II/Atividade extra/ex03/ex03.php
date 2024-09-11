<?php

$dolar = $_POST['dolar'];
$taxa = $_POST['taxa'];


$total = $dolar/$taxa;

echo "Valor após conversão: R$".$total;

?>