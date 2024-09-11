<?php
session_start(); 

$_SESSION['contatos'] = $_SESSION['contatos'] ?? [];

if (isset($_POST['Adicionar']) && !empty(trim($_POST['contato']))) {
    $_SESSION['contatos'][] = htmlspecialchars($_POST['contato']); 
}

if (isset($_POST['excluir'])) {
    $indice = $_POST['excluir'];
    if (isset($_SESSION['contatos'][$indice])) {
        unset($_SESSION['contatos'][$indice]);
        $_SESSION['contatos'] = array_values($_SESSION['contatos']); 
    }
}

if (!empty($_SESSION['contatos'])) {
    foreach ($_SESSION['contatos'] as $indice => $contato) {
        echo '<li>';
        echo htmlspecialchars($contato);
        echo ' <form action="ex15.php" method="post" style="display:inline;">';
        echo '<button type="submit" name="excluir" value="' . $indice . '">Excluir</button>';
        echo '</form>';
        echo '</li><br>';
    }
}
echo '<a href="ex15.html">Voltar à página</a>';
?>