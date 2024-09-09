<?php

$tempc = $_POST['tempc'];

/* F = C x 1,8 + 32 */

$tempf = ($tempc*1.8) +32;

echo "Temperatura [F]: ".$tempf;

?>