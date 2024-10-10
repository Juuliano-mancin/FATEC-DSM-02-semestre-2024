<?php
include_once 'conexao.php';
include_once 'menu.php';
$tb_clientes = $conn->query("SELECT * FROM tb_clientes")->fetchAll(PDO::FETCH_ASSOC);

// Contagem e Paginação
$totalClientes = count($tb_clientes);
$clientesPorPagina = 10;
$totalPaginas = ceil($totalClientes / $clientesPorPagina);
$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Limitar a página atual
if ($paginaAtual < 1) {
    $paginaAtual = 1;
} elseif ($paginaAtual > $totalPaginas) {
    $paginaAtual = $totalPaginas;
}

// Calcular o índice inicial e final
$inicio = ($paginaAtual - 1) * $clientesPorPagina;
$clientesPaginação = array_slice($tb_clientes, $inicio, $clientesPorPagina);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Lista de Clientes</h1>
    <a href="cadastrar.php" class="btn btn-success mb-3">Cadastrar Cliente</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Arquivo PDF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($clientesPaginação as $cliente): ?>
            <tr>
                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                <td><?= htmlspecialchars($cliente['email']) ?></td>
                <td>
                    <a href="uploads/<?= htmlspecialchars($cliente['arquivo_pdf']) ?>" target="_blank">Ver PDF</a>
                </td>
                <td>
                    <?php if ($_SESSION['nivel_acesso'] == 'ADMINISTRADOR'): ?>
                        <a href="editar.php?id=<?= $cliente['id'] ?>" class="btn btn-warning">Editar</a>
                        <a href="excluir.php?id=<?= $cliente['id'] ?>" class="btn btn-danger" onclick="return confirm('A exclusão será permanente! Tem certeza disso?')">Excluir</a>
                    <?php else: ?>
                        <span class="text-muted">Sem permissão</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-between mb-3">
        <div>
            Mostrando <?= $inicio + 1 ?> a <?= min($inicio + $clientesPorPagina, $totalClientes) ?> de <?= $totalClientes ?> registros
        </div>
        <div>
            <?php if ($paginaAtual > 1): ?>
                <a href="?pagina=<?= $paginaAtual - 1 ?>" class="btn btn-secondary"><<</a>
            <?php endif; ?>

            <?php if ($paginaAtual < $totalPaginas): ?>
                <a href="?pagina=<?= $paginaAtual + 1 ?>" class="btn btn-secondary">>></a>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
