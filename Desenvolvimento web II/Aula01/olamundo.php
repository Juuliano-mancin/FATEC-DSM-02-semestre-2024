<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
</head>
<body>
    <?php
        echo("Olá mundo!") . "<br>"; /*função de "print" - vem acompanhada de ()*/

        $nome  = "João ";    /*variável não pode começar com número, mas pode terminar*/
        $Nome = "Juliano "; /*diferencia maiusculas de minusculas*/

        $idade = 23;
        $n1 = 10;
        $n2 = 5;
        $soma = $n1 + $n2;
        
        echo $nome . "<br>" . $Nome . "<br>" . $idade . "<br>";
        echo $soma;
        echo "<p> $Nome $idade</p>";
    ?> 
</body>
</html>