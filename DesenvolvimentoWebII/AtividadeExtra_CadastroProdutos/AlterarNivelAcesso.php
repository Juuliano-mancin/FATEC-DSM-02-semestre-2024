<?php
session_start();
require_once 'Conexao.php';

// Verifica se o usuário está logado e se é administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['nivel_acesso'] !== 'Administrador') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $novo_nivel = $_POST['nivelacesso'];

    $stmt = $conn->prepare("UPDATE tb_usuarios SET nivelacesso = ? WHERE id = ?");
    $stmt->execute([$novo_nivel, $id_usuario]);

    header("Location: ListaUsuarios.php"); // Redireciona após a alteração
    exit;
}

// Aqui você deve obter todos os usuários para permitir a seleção do usuário a ser alterado
$usuarios = $conn->query("SELECT * FROM tb_usuarios")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Nível de Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0; /* Cor de fundo cinza claro */
            color: #333333; /* Cor do texto */
        }
        .navbar {
            background-color: #a12d2d; /* Cor da navbar vermelho escuro */
        }
        .btn-primary {
            background-color: #6c757d; /* Cor do botão primário em cinza */
            border-color: #6c757d;
        }
        .btn-primary:hover {
            background-color: #5a6268; /* Cor do botão primário ao passar o mouse */
            border-color: #545b62;
        }
        .form-select {
            border: 1px solid #a12d2d; /* Borda do seletor em vermelho escuro */
        }
        .form-label {
            color: #333333; /* Cor das labels */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="CadastrarUsuario.php">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ExcluirUsuario.php">Excluir Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AlterarNivelAcesso.php">Alterar Nível de Acesso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaUsuarios.php">Lista de Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaProdutos.php">Lista de Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2>Alterar Nível de Acesso</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="id_usuario" class="form-label">Usuário:</label>
            <select name="id_usuario" id="id_usuario" class="form-select" required>
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?= $usuario['id'] ?>"><?= htmlspecialchars($usuario['nome']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nivelacesso" class="form-label">Novo Nível de Acesso:</label>
            <select name="nivelacesso" id="nivelacesso" class="form-select">
                <option value="Visitante">Visitante</option>
                <option value="Comum">Comum</option>
                <option value="Administrador">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
