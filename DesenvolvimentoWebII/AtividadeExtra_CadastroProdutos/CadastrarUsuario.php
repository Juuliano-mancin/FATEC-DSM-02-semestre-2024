<?php
session_start();
require 'Conexao.php'; // Arquivo onde está a conexão PDO

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar a senha
    $nivelAcesso = $_POST['nivel_acesso']; // Nível de acesso escolhido

    // Verifica se o email já está cadastrado
    $stmt = $conn->prepare("SELECT id FROM tb_usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    if ($stmt->fetch()) {
        $_SESSION['erro_email'] = 'Este email já está cadastrado.';
        header('Location: CadastroUsuario.php');
        exit;
    }

    // Inserindo o usuário no banco de dados
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, email, senha, nivelacesso) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$nome, $email, $senha, $nivelAcesso])) {
        $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso!';
        header('Location: ListaUsuarios.php'); // Redireciona para a lista de usuários
    } else {
        $_SESSION['erro'] = 'Erro ao cadastrar usuário.';
        header('Location: CadastroUsuario.php'); // Redireciona de volta para o cadastro
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f3f3f3;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #7e2626;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #ffffff;">Sistema de Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="CadastrarProduto.php" style="color: #ffffff;">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaProdutos.php" style="color: #ffffff;">Lista de Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ExcluirUsuario.php" style="color: #ffffff;">Excluir Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AlterarNivelAcesso.php" style="color: #ffffff;">Alterar Nível de Acesso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ListaUsuarios.php" style="color: #ffffff;">Lista de Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php" style="color: #ffcccc;">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center" style="color: #7e2626;">Cadastrar Usuário</h2>
    <?php if (isset($_SESSION['erro_email'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['erro_email'] ?></div>
        <?php unset($_SESSION['erro_email']); ?>
    <?php endif; ?>
    <?php if (isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-success"><?= $_SESSION['mensagem'] ?></div>
        <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>
    <form action="CadastrarUsuario.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label" style="color: #7e2626;">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="color: #7e2626;">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label" style="color: #7e2626;">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nivel_acesso" class="form-label" style="color: #7e2626;">Nível de Acesso:</label>
            <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                <option value="Visitante">Visitante</option>
                <option value="Comum">Comum</option>
                <option value="Administrador">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn w-100" style="background-color: #7e2626; color: #ffffff;">Cadastrar</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
