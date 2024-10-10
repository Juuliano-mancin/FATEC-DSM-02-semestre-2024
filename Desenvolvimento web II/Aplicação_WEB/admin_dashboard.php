<?php
session_start();
require_once 'conexao.php';
include 'menu.php'; // Incluir o menu (navbar) no topo do arquivo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Correção aqui -->
    <title>Painel de Controle Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Correção aqui -->
</head>
<body>
    <div class="container mt-5">
        <h2>Painel de Controle Administrador</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="lista_clientes.php" class="btn btn-primary btn-lg d-grid">Lista de Clientes</a> <!-- Correção aqui -->
            </div>
            <div class="col-md-6">
                <a href="lista_usuarios.php" class="btn btn-secondary btn-lg d-grid">Lista de Usuários</a> <!-- Correção aqui -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Correção aqui -->
</body>
</html>
