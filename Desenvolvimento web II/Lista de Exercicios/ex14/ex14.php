<?php

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1+$nota2+$nota3)/3

if ($media >=6) 
    {
        echo "Aluno aprovado. média final: ".$media;
    }
else 
    {
        echo "Aluno reprovado. média final: ".$media;
    }
?>