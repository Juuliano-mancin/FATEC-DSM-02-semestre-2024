<?php
$host = 'localhost';
$dbname = 'sistema_clientes';
$username = 'root';
$password = ''; // SE CASO DER ERRO COLOCAR PASSWORD = 'fatec'

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERRO NA CONEXÃO: " . $e->getMessage());
}
?>
