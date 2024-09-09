<?php

$num = $_POST['numero'];

echo "<h3> Gerador de Números </h3> <br>";

$a = 0;

$b = 1;

$pisos = 1;

echo "<p>sequencia de fibonacci para $num etapas</p>";

echo "<p> $a, $b";

for ($i = 2; $i < $num; $i++) {

    $temp = $a + $b;

    echo $temp;

    $pisos = $pisos + $temp**2;

    $a = $b;

    $b = $temp;
}

echo "</p>";

echo "<p>para $num etapas, necessitamos de $pisos pisos </p>";

?>