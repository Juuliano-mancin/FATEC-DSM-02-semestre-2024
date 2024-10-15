<?php
include 'Conexao.php'; // Corrigido para usar 'Conexao.php'
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit;
}

// Verifica se o nível de acesso do usuário é 'Comum' ou 'Administrador'
$nivelAcesso = $_SESSION['nivel_acesso'];
if ($nivelAcesso !== 'Comum' && $nivelAcesso !== 'Administrador') {
    header("Location: index.php"); // Redireciona para a página inicial se o acesso não for permitido
    exit;
}

$produtos = $conn->query("SELECT * FROM tb_produtos")->fetchAll(PDO::FETCH_ASSOC); // Alterado para a tabela de produtos
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0; /* Cor de fundo cinza claro */
            color: #333333; /* Cor do texto */
        }
        .navbar {
            background-color: #a12d2d; /* Cor da navbar vermelho escuro */
        }
        .btn-success {
            background-color: #5cb85c; /* Cor do botão de cadastrar em verde */
        }
        .btn-warning {
            background-color: #ffc107; /* Cor do botão de editar em amarelo */
        }
        .btn-danger {
            background-color: #dc3545; /* Cor do botão de excluir em vermelho */
        }
        .table {
            background-color: #ffffff; /* Cor de fundo da tabela */
        }
        .table th, .table td {
            border: 1px solid #a12d2d; /* Borda da tabela em vermelho escuro */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="AdminDashboard.php">Sistema de Cadastro</a>
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
                    <a class="nav-link text-danger" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h1 class="mt-4">Lista de Produtos</h1>
    <a href="CadastrarProduto.php" class="btn btn-success mb-3">Cadastrar Produto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= htmlspecialchars($produto['nome']) ?></td>
                <td><?= htmlspecialchars($produto['descricao']) ?></td>
                <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= htmlspecialchars($produto['quantidade']) ?></td>
                <td>
                    <?php if (!empty($produto['imagem'])): ?>
                        <img src="uploads/<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>" width="100">
                    <?php else: ?>
                        Não disponível
                    <?php endif; ?>
                </td>
                <td>
                    <a href="EditarProduto.php?id=<?= $produto['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="ExcluirProduto.php?id=<?= $produto['id'] ?>" class="btn btn-danger" onclick="return confirm('A exclusão será permanente! Tem certeza disso?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
