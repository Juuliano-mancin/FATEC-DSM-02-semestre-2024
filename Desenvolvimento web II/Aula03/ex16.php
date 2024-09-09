<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


echo "<h3> Sequência de números: <br>";
    for ($i=$n1; $i <=$n2 ; $i++) { 

         echo $i . "<br />";        
    }


?>