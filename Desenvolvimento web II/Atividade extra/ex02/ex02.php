<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($nome==null || $email==null || $senha==null)
    {
        echo "Campos obrigatórios não preenchidos";
    }
else 
    {
        echo "Cadastro realizado com sucesso para o usuário ".$nome;
    }

?>