<?php
include 'Conexao.php'; // Corrigido para usar 'Conexao.php'
$id = $_GET['id'];
$produto = $conn->prepare("SELECT imagem FROM tb_produtos WHERE id = ?");
$produto->execute([$id]);
$produto = $produto->fetch(PDO::FETCH_ASSOC);

// Exclui a imagem do produto do servidor
if ($produto && file_exists("upload/" . $produto['imagem'])) {
    unlink("upload/" . $produto['imagem']);
}

// Exclui o produto do banco de dados
$stmt = $conn->prepare("DELETE FROM tb_produtos WHERE id = ?");
$stmt->execute([$id]);

header("Location: ListaProdutos.php"); // Redireciona para a lista de produtos
exit;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto Excluído</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

<div class="container mt-4">
    <h1>Produto Excluído</h1>
    <p class="alert alert-success">O produto foi excluído com sucesso!</p>
    <a href="ListaProdutos.php" class="btn btn-primary">Voltar para a Lista de Produtos</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
