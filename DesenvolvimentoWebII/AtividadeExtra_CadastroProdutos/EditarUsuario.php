<?php
session_start();
require_once 'Conexao.php';

// Verifica se o usuário está logado e se é administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['nivel_acesso'] !== 'Administrador') {
    header("Location: AdminDashboard.php");
    exit;
}

// Verifica se o ID do usuário foi passado na URL
if (!isset($_GET['id'])) {
    header('Location: ListaUsuarios.php'); // Redireciona se o ID não for fornecido
    exit;
}

// Recupera os dados do usuário
$id_usuario = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE id = :id");
$stmt->bindParam(':id', $id_usuario);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    header('Location: ListaUsuarios.php'); // Redireciona se o usuário não for encontrado
    exit;
}

// Atualiza os dados do usuário se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nivelAcesso = $_POST['nivel_acesso'];

    // Atualiza o usuário no banco de dados
    $stmt = $conn->prepare("UPDATE tb_usuarios SET nome = ?, email = ?, nivelacesso = ? WHERE id = ?");
    if ($stmt->execute([$nome, $email, $nivelAcesso, $id_usuario])) {
        $_SESSION['mensagem'] = 'Usuário atualizado com sucesso!';
        header('Location: ListaUsuarios.php'); // Redireciona para a lista de usuários
        exit;
    } else {
        $_SESSION['erro'] = 'Erro ao atualizar usuário.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
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
    <h2>Editar Usuário</h2>
    <?php if (isset($_SESSION['erro'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['erro'] ?></div>
        <?php unset($_SESSION['erro']); ?>
    <?php endif; ?>
    <?php if (isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-success"><?= $_SESSION['mensagem'] ?></div>
        <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>
    <form action="EditarUsuario.php?id=<?= htmlspecialchars($usuario['id']) ?>" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= htmlspecialchars($usuario['nome']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($usuario['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="nivel_acesso" class="form-label">Nível de Acesso:</label>
            <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                <option value="Visitante" <?= $usuario['nivelacesso'] == 'Visitante' ? 'selected' : '' ?>>Visitante</option>
                <option value="Comum" <?= $usuario['nivelacesso'] == 'Comum' ? 'selected' : '' ?>>Comum</option>
                <option value="Administrador" <?= $usuario['nivelacesso'] == 'Administrador' ? 'selected' : '' ?>>Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="ListaUsuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
