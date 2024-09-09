<?php
    $frutas = array("Maçã","Banana","Murango", "Manga", "Tomate", "Kiwi", "Abacate");
    
    echo "Lista de frutas:<br />";
    for ($i=1; $i <=6 ; $i+=2) { 
        echo $frutas[$i] . "<br / >";
    }
    echo "<br />Fim da lista";
?>