<?php
session_start();
require_once 'Conexao.php';

// Verifica se o usuário está logado e se é administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['nivel_acesso'] !== 'Administrador') {
    header("Location: AdminDashboard.php");
    exit;
}

// Consulta todos os usuários
$sql = "SELECT * FROM tb_usuarios"; // Use o nome correto da tabela
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f3f3; /* Cor de fundo */
        }
        .container {
            background-color: #ffffff; /* Fundo da tabela */
            padding: 20px; /* Espaçamento interno */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        h2 {
            color: #7e2626; /* Cor do título */
        }
        .btn-danger {
            background-color: #ff4d4d; /* Cor de fundo para botões de excluir */
            border-color: #ff4d4d; /* Cor da borda do botão de excluir */
        }
        .btn-danger:hover {
            background-color: #ff1a1a; /* Cor de fundo ao passar o mouse no botão de excluir */
        }
        .btn-warning {
            background-color: #ffc107; /* Cor de fundo para botões de editar */
            border-color: #ffc107; /* Cor da borda do botão de editar */
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Cor de fundo ao passar o mouse no botão de editar */
        }
        .btn-secondary {
            background-color: #7e2626; /* Cor do botão secundário */
            border-color: #7e2626; /* Cor da borda do botão secundário */
        }
        .btn-secondary:hover {
            background-color: #5c1e1e; /* Cor de fundo ao passar o mouse no botão secundário */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Lista de Usuários</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível de Acesso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nome']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td><?= htmlspecialchars($usuario['nivelacesso']) ?></td> <!-- Corrigido para 'nivelacesso' -->
                <td>
                    <a href="EditarUsuario.php?id=<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-warning">Editar</a>
                    <a href="ExcluirUsuario.php?id=<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="AdminDashboard.php" class="btn btn-secondary">Voltar ao Painel de Administração</a> <!-- Botão para voltar ao painel -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
