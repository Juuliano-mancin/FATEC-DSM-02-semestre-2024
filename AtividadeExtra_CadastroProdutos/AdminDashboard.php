<?php
session_start();
require_once 'Conexao.php';

// Verifica se o usuário está logado e se é administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['nivel_acesso'] !== 'Administrador') {
    header("Location: login.php"); // Redireciona para o login se não for administrador
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #969696;"> <!-- Alteração da cor do fundo da navbar -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #7e2626;">Sistema de Cadastro</a> <!-- Alteração da cor do texto do logo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="CadastrarUsuario.php" style="color: #000000;">Cadastrar Usuário</a> <!-- Cor preta -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ExcluirUsuario.php" style="color: #000000;">Excluir Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AlterarNivelAcesso.php" style="color: #000000;">Alterar Nível de Acesso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaUsuarios.php" style="color: #000000;">Lista de Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaProdutos.php" style="color: #000000;">Lista de Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php" style="color: #7e2626;">Sair</a> <!-- Cor personalizada -->
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 style="color: #7e2626;">Painel de Administração</h2> <!-- Alteração da cor do título -->
    <div class="list-group">
        <a href="CadastrarUsuario.php" class="list-group-item list-group-item-action" style="color: #000000; background-color: #f8f9fa;">Cadastrar Usuário</a> <!-- Alteração nas cores do link -->
        <a href="ExcluirUsuario.php" class="list-group-item list-group-item-action" style="color: #000000; background-color: #f8f9fa;">Excluir Usuário</a>
        <a href="AlterarNivelAcesso.php" class="list-group-item list-group-item-action" style="color: #000000; background-color: #f8f9fa;">Alterar Nível de Acesso</a>
        <a href="ListaUsuarios.php" class="list-group-item list-group-item-action" style="color: #000000; background-color: #f8f9fa;">Lista de Usuários</a>
        <a href="ListaProdutos.php" class="list-group-item list-group-item-action" style="color: #000000; background-color: #f8f9fa;">Lista de Produtos</a>
        <a href="logout.php" class="list-group-item list-group-item-action text-danger" style="color: #7e2626; background-color: #f8f9fa;">Sair</a> <!-- Alteração na cor do link de sair -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
