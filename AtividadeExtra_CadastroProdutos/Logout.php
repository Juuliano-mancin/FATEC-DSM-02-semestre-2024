<?php
session_start();
session_unset(); // Limpa as variáveis de sessão
session_destroy(); // Destrói a sessão
header("Location: login.php"); // Redireciona para a página de login
exit;
?>