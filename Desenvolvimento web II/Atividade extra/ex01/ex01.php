<?php

$valor = $_POST['valor'];
$gorjeta = $_POST['gorjeta'];

$total = ($valor * ($gorjeta/100));

echo "O valor da gorjeta é de: ".$total;

?>