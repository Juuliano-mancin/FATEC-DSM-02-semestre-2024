<?php
include 'conexao.php';

$id = $_GET['id'];
$cliente = $conn->prepare("SELECT arquivo_pdf FROM tb_clientes WHERE id = ?");
$cliente->execute([$id]);
$cliente = $cliente->fetch(PDO::FETCH_ASSOC);

// Excluir arquivo PDF do servidor
if ($cliente && file_exists("uploads/" . $cliente['arquivo_pdf'])) {
    unlink("uploads/" . $cliente['arquivo_pdf']);
}

// Excluir o cliente do banco de dados
$stmt = $conn->prepare("DELETE FROM tb_clientes WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>
