<?php 
$texto = $_POST['texto'];

$contador = 0;  
$nova_string = "";  
$ultimocaractere = ""; 

for ($i = 0; $i < strlen($texto); $i++) {
    $caractereatual = $texto[$i];

    
    if ($caractereatual!=' ' || ($caractereatual==' '&& $ultimocaractere !=' ')) {
        $nova_string.= $caractereatual;
    }
    $ultimocaractere=$caractereatual;

}
$ultimo_caractere = "";  
for ($i = 0; $i < strlen($nova_string); $i++) {
    $caractereatual = $nova_string[$i];


if ($caractereatual != ' ' && ($i== 0 || $ultimocaractere == ' ') ) {
    $contador++;
}
$ultimocaractere = $caractereatual;
}
echo"Número de palavras: $contador";

?>