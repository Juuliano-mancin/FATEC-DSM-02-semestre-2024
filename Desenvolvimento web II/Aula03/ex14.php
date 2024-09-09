<?php
    $paises = array("Brasil","Chile","Equador", "Guatemala", "México", "Moçambique", "Uruguai");
    
    echo "Lista de Países:<br />";
    for ($i=0; $i <=6 ; $i+=2) { 
        echo $paises[$i] . "<br / >";
    }
    echo "<br />Fim da lista";
?>