<?php

$num=$_GET ['txtnum'];

echo "<h3> Calculo Porcentagem </h3>";

$porcentagem = ($num * 0.15);

echo "15% de $num é: $porcentagem <br>";

echo "Valor com desconto: R$ " .$num - $porcentagem;

?>