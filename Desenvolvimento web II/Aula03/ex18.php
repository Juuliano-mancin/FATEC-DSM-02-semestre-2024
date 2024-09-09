<?php
$nome = $_POST ['nome'];
$sexo = $_POST ['sexo'];
$idade = $_POST ['idade'];

if ($idade >=18 && $sexo == "M") {
    echo "$nome, você já pode realizar o seu alistamento militar";
}elseif ($idade<18 && $sexo=="M") {
    echo "$nome, você só pode se alistar quando completar 18 anos";
}
else {
    echo "$nome, você não pode se alistar";
}
?>