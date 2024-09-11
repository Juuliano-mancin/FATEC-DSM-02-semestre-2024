<?php

$numero = $_POST['numero'];
//para isso irei utilizar a função rand que gera números
$n = rand(1, 100);
if ($numero != $n) {
    if ($numero < $n) {
        echo "O número é muito baixo";
    } else {
        echo "O número é muito alto";
    }
}
else {
    echo "Parabéns, você acertou";
}

?>