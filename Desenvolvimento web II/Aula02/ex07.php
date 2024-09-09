<?php 

$resultado01=$_POST ['txtnum01'];
$resultado02=$_POST ['txtnum02'];

echo "<h3> Resultado </h3>";

$resultado = $resultado01 * $resultado02;

if ($resultado >= 50)

    {
        echo "<p> O total de pontos da equipe foi de: $resultado </p>";
    }

else
    {
        echo "<p> Precisa melhorar os resultados </p>";
    }

echo "<p> Programa encerrado </p>"

?>