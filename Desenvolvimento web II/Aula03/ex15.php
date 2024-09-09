<?php

$let = $_POST['let'];
    $letra = array("A", "B", "C", "D", "E");

    echo "<h3> Array Alterado: <br>";
    for ($i=0; $i <=4 ; $i++) { 
        if ($let == $letra[$i])
            $letra[$i] = 'X';
    
    
        echo $letra[$i] . "<br / >";               
    }


?>