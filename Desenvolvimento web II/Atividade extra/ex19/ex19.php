<?php

$dist = $_POST['dist'];
$vel = $_POST['vel'];

$temp = $dist / $vel;

echo "tempo médio da viagem [horas]: ".$temp;

?>