<?php
session_start(); 

$_SESSION['eventos'] = $_SESSION['eventos'] ?? [];

if (isset($_POST['Adicionar']) && !empty(trim($_POST['evento']))) {
    $_SESSION['eventos'][] = htmlspecialchars($_POST['evento']); 
}

if (isset($_POST['excluir'])) {
    $indice = $_POST['excluir'];
    if (isset($_SESSION['eventos'][$indice])) {
        unset($_SESSION['eventos'][$indice]);
        $_SESSION['eventos'] = array_values($_SESSION['eventos']); 
    }
}

if (!empty($_SESSION['eventos'])) {
    foreach ($_SESSION['eventos'] as $indice => $evento) {
        echo '<li>';
        echo htmlspecialchars($evento);
        echo ' <form action="ex10.php" method="post" style="display:inline;">';
        echo '<button type="submit" name="excluir" value="' . $indice . '">Excluir</button>';
        echo '</form>';
        echo '</li><br>';
    }
}
echo '<a href="ex10.html">Voltar à página</a>';
?>