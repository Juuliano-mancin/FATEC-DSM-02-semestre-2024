<?php 

$temperatura=$_POST ['txtnum'];

echo "<h3> temperatura </h3>";

if ($temperatura == 0)

    {
        echo "<p> Temperatura neutra </p>";
    }

elseif ($temperatura < 0)

    { 
        echo "<p> Frio intenso detectado </p>"; 
    }

else

    {
        echo "<p> clima ameno e agradável </p>";
    }

echo "<p> Programa encerrado </p>"

?>