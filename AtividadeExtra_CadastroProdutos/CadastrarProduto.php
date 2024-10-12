<?php
include 'Conexao.php'; // Corrigido para usar 'Conexao.php'
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $imagem = $_FILES['imagem'];

    // Validação da imagem
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
    $extensaoImagem = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));
    
    if ($imagem['error'] === UPLOAD_ERR_OK) {
        // Verifica se a extensão é permitida
        if (in_array($extensaoImagem, $extensoesPermitidas)) {
            $nomeImagem = uniqid() . "-" . $imagem['name'];
            move_uploaded_file($imagem['tmp_name'], "upload/$nomeImagem"); // Armazena na pasta 'upload'

            // Atualizando a inserção para a tabela tb_produtos
            $stmt = $conn->prepare("INSERT INTO tb_produtos (nome, descricao, preco, quantidade, imagem) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$nome, $descricao, $preco, $quantidade, $nomeImagem]);

            header("Location: ListaProdutos.php"); // Redirecionando para a lista de produtos
            exit;
        } else {
            $errorMessage = "Apenas arquivos de imagem (.jpg, .jpeg, .png, .gif) são permitidos.";
        }
    } else {
        $errorMessage = "Erro no upload da imagem.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
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
            background-color: #007bff; /* Cor do botão de cadastrar em azul */
        }
        .alert-danger {
            background-color: #dc3545; /* Cor da mensagem de erro em vermelho */
            color: white; /* Cor do texto da mensagem de erro */
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
                    <a class="nav-link text-danger" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="mt-4">Cadastrar Produto</h1>
    
    <?php if (isset($errorMessage)): ?> <!-- Exibindo mensagem de erro -->
        <div class="alert alert-danger">
            <?= htmlspecialchars($errorMessage) ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" required></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" class="form-control" name="preco" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" name="quantidade" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem do Produto</label>
            <input type="file" class="form-control" name="imagem" accept=".jpg,.jpeg,.png,.gif" required>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
