<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$IMC = ($altura*$altura)/$peso;

echo "IMC: ".$IMC;

?>