<?php
session_start();
require_once 'Conexao.php';

// Verifica se o usuário está logado e se é administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['nivel_acesso'] !== 'Administrador') {
    header("Location: login.php"); // Redireciona para o login se não for administrador
    exit;
}

// Verifica se um ID de usuário foi enviado para exclusão
if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    // Executa a exclusão
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id_usuario);
    $stmt->execute();

    header("Location: ListaUsuarios.php"); // Redireciona para a lista de usuários após a exclusão
    exit;
}

// Consulta todos os usuários para exibição
$usuarios = $conn->query("SELECT * FROM tb_usuarios")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0; /* Cor de fundo cinza claro */
            color: #333333; /* Cor do texto */
        }
        .navbar {
            background-color: #a12d2d; /* Cor da navbar vermelho escuro */
        }
        .table {
            background-color: #ffffff; /* Cor de fundo da tabela */
        }
        .table-bordered th, .table-bordered td {
            border-color: #a12d2d; /* Bordas da tabela em vermelho escuro */
        }
        .btn-danger {
            background-color: #a12d2d; /* Cor do botão de excluir vermelho escuro */
            border-color: #a12d2d;
        }
        .btn-secondary {
            background-color: #6c757d; /* Cor do botão secundário */
            border-color: #6c757d;
        }
        .btn:hover {
            opacity: 0.8; /* Efeito de hover nos botões */
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
                    <a class="nav-link" href="CadastrarProduto.php">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaProdutos.php">Lista de Produtos</a>
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
                    <a class="nav-link text-danger" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2>Excluir Usuário</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nome']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td>
                    <a href="ExcluirUsuario.php?id=<?= htmlspecialchars($usuario['id']) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="AdminDashboard.php" class="btn btn-secondary">Voltar ao Painel de Administração</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
