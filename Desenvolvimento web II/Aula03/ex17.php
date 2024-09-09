<?php

$n1 = $_POST['n1'];
$d1 = $_POST['d1'];
$n2 = $_POST['n2'];
$d2 = $_POST['d2'];

$vd1 = $n1 * ($d1/100);
$vf1 = $n1 - $vd1;  

$vd2 = $n2 * ($d2/100);
$vf2 = $n2 - $vd2;

$vt = $vf1 + $vf2;


echo "O valor do primeiro produto com desconto é: ".$vf1."<br>";
echo "O valor do segundo produto com desconto é: ".$vf2."<br>";
echo "O valor total do pedido é:  ".$vt."<br>";

?>