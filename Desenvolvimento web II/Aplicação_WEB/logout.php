<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome_usuario'])) {
    header('Location: login.php');
    exit;
}

// Finaliza a sessão
session_destroy();
header('Location: login.php');
exit;
?>
