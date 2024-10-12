<?php
include 'Conexao.php'; // Corrigido para usar 'Conexao.php'
$id = $_GET['id'];
$produto = $conn->prepare("SELECT * FROM tb_produtos WHERE id = ?");
$produto->execute([$id]);
$produto = $produto->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $imagemNova = $_FILES['imagem'];

    if ($imagemNova['error'] === UPLOAD_ERR_OK) {
        $nomeImagemNova = uniqid() . "-" . $imagemNova['name'];
        move_uploaded_file($imagemNova['tmp_name'], "upload/$nomeImagemNova");

        // Remove a imagem antiga
        if (file_exists("upload/" . $produto['imagem'])) {
            unlink("upload/" . $produto['imagem']);
        }

        $stmt = $conn->prepare("UPDATE tb_produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ?, imagem = ? WHERE id = ?");
        $stmt->execute([$nome, $descricao, $preco, $quantidade, $nomeImagemNova, $id]);
    } else {
        $stmt = $conn->prepare("UPDATE tb_produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?");
        $stmt->execute([$nome, $descricao, $preco, $quantidade, $id]);
    }

    header("Location: ListaProdutos.php"); // Redirecionando para a lista de produtos
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
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
    <h1 class="mt-4">Editar Produto</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" required><?= htmlspecialchars($produto['descricao']) ?></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" name="preco" step="0.01" value="<?= htmlspecialchars($produto['preco']) ?>" required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?= htmlspecialchars($produto['quantidade']) ?>" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem do Produto (deixe em branco se não quiser alterar)</label>
            <input type="file" class="form-control" name="imagem" accept=".jpg,.jpeg,.png,.gif">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
