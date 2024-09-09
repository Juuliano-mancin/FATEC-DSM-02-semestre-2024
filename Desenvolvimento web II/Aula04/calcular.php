<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resultado simulação </title>
</head>
<body>

    <?php

        /* Variaveis*/

        $cliente = $_POST['cliente'];  // 's' para SIM e 'n' para NÃO
        $valor = $_POST['valor']; //Valor do empréstimo
        $score = $_POST['score']; //Valor do Serasa Score
        $parcelas = $_POST['parcelas']; //Quantidade de parcelas
        /* $seguro = $_POST['seguro']; //Recebe TRUE se a checkbox for selecionada e FALSE se ficar vazia */
        $juros = 0.03;

        /*Maneira correta de declarar seguro como true or false*/

        if (isset($_POST['seguro']))
             {$seguro = 49.9;}
        else 
            {$seguro = 0;} 

        /* CALCULOS */

        if($cliente == "s")
            {
                $valor = ($valor * 1.03)+$seguro;
                $valortotal = ($valor * 1.0038);
                $valorparcela = $valortotal/$parcelas;
            }
        else 
            {
                /*usando o switch para definir o valor do juros caso o usuário seja cliente*/
                switch ($score)
                    {
                        case $score <= 299:
                            $juros = 0.2;
                            break;

                        case $score <= 499:
                             $juros = 0.15;
                             break;
                        
                        case $score <= 699:
                            $juros = 0.1;
                            break;
                        
                        default:
                             $juros = 0.05;
                            break;
                    }

            $valor = ($valor + $valor * ($juros * $parcelas)) + 35 + $seguro;
            $valortotal = $valor * 1.0038;
            $valorparcela = $valortotal/$parcelas;

            }
    ?>

    <h2> Seja bem vindo ao MyBank </h2>
    <h3> RESULTADO DA SIMULAÇÃO  </h3>

    <p> Valor das parcelas: R$<?php echo number_format($valorparcela, 2, ",", ".") ?> </p> 
    <!-- Variavel, casas depois da virgula, separador de decimal, separador de milhar-->

    <p> Quantidade de parcelas: <?php echo $parcelas ?> </p>

    <p> Taxa de jutos: <?php echo ($juros*100)."%" ?>  </p>

    <p> Custo efetivo total: <?php echo number_format ($valortotal,  2, ",", ".") ?> </p>
    <!-- Variavel, casas depois da virgula, separador de decimal, separador de milhar-->

    
</body>
</html>