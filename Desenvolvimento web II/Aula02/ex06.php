<?php 

$idade=$_POST ['txtnum'];

echo "<h3> Calculo Idade </h3>";

if ($idade >= 60)

    {
        echo "<p> Pulseira VIP para idosos </p>";
    }

elseif ($idade >=18)

    { 
        echo "<p> Pulseira normal para adultos </p>"; 
    }

else

    {
        echo "<p> Pulseira para menores de idade </p>";
    }

echo "<p> Programa encerrado </p>"

?>