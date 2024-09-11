<?php

$anonasc = $_POST['anonasc'];

$dataNascimento = $anonasc;
$date = new DateTime($dataNascimento );
$interval = $date->diff( new DateTime( date('Y-m-d') ) );
echo $interval->format( '%Y anos' );


/* || TERMINAR A LOGICA DE MOSTRAR SE O USUÁRIO É MAIOR OU MENOR DE IDADE ||*/

?>