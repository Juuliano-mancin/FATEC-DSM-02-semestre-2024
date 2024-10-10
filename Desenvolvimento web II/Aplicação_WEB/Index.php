<?php
include_once 'Conexao.php';

$tb_clientes = $conn->query("SELECT * FROM tb_clientes")->fetchAll(PDO::FETCH_ASSOC);
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
    <h1 class="mt-4">Sistema Shop</h1>
    <?php
    echo '<h2>Bem-vindo(a), Visitante!</h2>';
    echo '<a href="Login.php">Fazer login</a> ou <a href="Cadastro_usuario.php">Criar conta</a>';
    ?>
</div>

</body>
</html>

