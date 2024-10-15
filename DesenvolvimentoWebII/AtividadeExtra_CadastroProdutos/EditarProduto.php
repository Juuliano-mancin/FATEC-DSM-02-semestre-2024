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
    <style>
        body {
            background-color: #f9f9f9; /* Cor de fundo suave */
            color: #333; /* Cor do texto padrão */
            font-family: Arial, sans-serif; /* Fonte mais moderna */
        }
        .navbar {
            background-color: #9c2a2a; /* Cor da navbar */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra sutil */
        }
        .navbar-brand, .nav-link {
            color: white !important; /* Texto branco na navbar */
        }
        .nav-link:hover {
            text-decoration: underline; /* Sublinha ao passar o mouse */
        }
        .container {
            margin-top: 30px; /* Margem superior para o container */
            border-radius: 8px; /* Bordas arredondadas */
            background-color: white; /* Fundo branco para o formulário */
            padding: 20px; /* Espaçamento interno */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra ao redor do container */
        }
        h1 {
            font-size: 2em; /* Aumentar tamanho do título */
            margin-bottom: 20px; /* Margem inferior no título */
            color: #4a4a4a; /* Cor do título */
        }
        .form-group label {
            font-weight: bold; /* Negrito nos rótulos dos campos */
        }
        .btn-primary {
            background-color: #007bff; /* Cor do botão */
            border: none; /* Sem borda */
            transition: background-color 0.3s ease; /* Transição suave para hover */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Cor do botão ao passar o mouse */
        }
        .alert-danger {
            background-color: #dc3545; /* Cor da mensagem de erro */
            color: white; /* Cor do texto da mensagem de erro */
            padding: 10px; /* Espaçamento interno */
            border-radius: 5px; /* Bordas arredondadas */
        }
        @media (max-width: 576px) {
            .container {
                padding: 15px; /* Ajuste de padding para telas pequenas */
            }
        }
    </style>
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
