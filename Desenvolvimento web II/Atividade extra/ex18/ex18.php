<?php
$destino = $_POST['destino'];
$peso = $_POST['peso'];

    if ($destino == 'nacional') {
        if ($peso <= 5) {
            $valor_frete = 10;
        } elseif ($peso <= 10) {
            $valor_frete = 15; 
        } else {
            $valor_frete = 20 + ($peso - 10) * 2; 
        }
    } elseif ($destino == 'internacional') {
        if ($peso <= 5) {
            $valor_frete = 50; 
        } elseif ($peso <= 10) {
            $valor_frete = 80; 
        } else {
            $valor_frete = 100 + ($peso - 10) * 5; 
        }
    } else {
        $valor_frete = "Destino inválido";
    }

echo "O valor do frete para o pacote de $peso kg com destino $destino é: R$ $valor_frete";
?>
