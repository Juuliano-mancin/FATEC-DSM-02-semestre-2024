<?php

$t1 = $_POST['t1'];
$termos = $_POST['termos'];
$razao = $_POST['razao'];

$res = $t1;

    for ($i=$t1; $i <= $termos ; $i++)
    {

    echo "a".$i.".....".$res."<br>";      
    $res = $res * $razao;
    
    }

?>