<?php 

$idade=$_POST ['txtnum'];

echo "<h3> Calculo Idade </h3>";

if ($idade >= 10)

    {
        echo "<p> Você está apto para participar da excursão </p>";
    }

else 

    { 
        echo "<p> Você não tem idade suficiente </p>"; 
    }

echo "<p> Programa encerrado </p>"

?>