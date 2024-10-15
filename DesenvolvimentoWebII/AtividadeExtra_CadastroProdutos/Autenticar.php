<?php
session_start();
require 'Conexao.php'; // Arquivo onde está a conexão PDO

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificando se o email existe no banco de dados
    $stmt = $conn->prepare("SELECT id, nome, senha, nivelacesso FROM tb_usuarios WHERE email = :email"); // Use o nome correto da tabela
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        // Login bem-sucedido, armazenando informações na sessão
        $_SESSION['id_usuario'] = $usuario['id'];
        $_SESSION['nome_usuario'] = $usuario['nome'];
        $_SESSION['nivel_acesso'] = $usuario['nivelacesso']; // Corrigido para 'nivelacesso'
        
        // Redirecionar com base no nível de acesso
        if ($usuario['nivelacesso'] == 'Administrador') {
            header('Location: AdminDashboard.php');
        } elseif ($usuario['nivelacesso'] == 'Comum') {
            header('Location: ListaProdutos.php');
        } else {
            header('Location: index.php');
        }
        exit;
    } else {
        // Falha no login, redireciona de volta para o login
        $_SESSION['erro_login'] = 'Email ou senha inválidos.';
        echo '<p style="color: red;">' . $_SESSION['erro_login'] . '</p>';
        unset($_SESSION['erro_login']); // Remove a mensagem da sessão após exibi-la
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <h2>Login</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <?php if (isset($_SESSION['erro_login'])): ?>
        <div class="alert alert-danger mt-3">
            <?= $_SESSION['erro_login'] ?>
        </div>
        <?php unset($_SESSION['erro_login']); ?>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
