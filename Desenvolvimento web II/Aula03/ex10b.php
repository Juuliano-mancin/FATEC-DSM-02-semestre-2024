<?php

$num = $_POST['numero'];

echo "<h3> Gerador de Números </h3> <br>";

$a = 0;

$b = 1;

$azulejos = 1;

echo "<p>sequencia de fibonacci para $num etapas</p>";

echo "$a $b";

for ($i = 2; $i < $num; $i++) {

    $temp = $a + $b;

    echo $temp;

    $a = $b;

    $b = $temp;
}

?>