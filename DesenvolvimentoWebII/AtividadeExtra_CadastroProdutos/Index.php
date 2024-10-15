<?php
session_start();
$nivelAcesso = isset($_SESSION['nivelacesso']) ? $_SESSION['nivelacesso'] : 'Visitante';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MidNight Munchies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <div class="header">
    <div class="content"> <!-- Primeira div que contém todo o conteúdo -->
        <h1 style="font-family: 'Titulos', sans-serif;">MidNight Munchies</h1>
        
        <?php if ($nivelAcesso === 'Visitante'): ?>
            <p style="font-family: 'Textos', sans-serif;"><a href="CadastrarUsuario.php">criar sua conta</a>  <br> conheça nossos <a href="Parceiros.html">parceiros</a></p>
        <?php else: ?>
            <p style="font-family: 'Textos', sans-serif;"><a href="ListaProdutos.php">Ver Produtos</a></p>
        <?php endif; ?>

        <div class="date-time">
            <?php
                // Define o fuso horário, se necessário
                date_default_timezone_set('America/Sao_Paulo'); // Ajuste o fuso horário conforme necessário

                // Obtém a data e hora atual
                $currentDateTime = date('d/m/Y H:i');

                // Exibe a data e hora
                echo "AGORA <br>" . $currentDateTime;
            ?>
        </div>
    </div>

    <div class="empty-div"> <!-- Segunda div em branco -->
    <img src="img/BackgroundHeader.jpg" alt="Descrição da Imagem" style="width: 90%; height: auto; display: block; margin: 0 auto;">  
    </div>
</div>

        <div class="nova-div">
            <div class="div1">
                <h3 style="font-family: 'Titulos', sans-serif;" class="txt">Login</h3>
                <?php if ($nivelAcesso === 'Visitante'): ?>
                    <?php if (isset($_SESSION['erro_login'])): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($_SESSION['erro_login']) ?></div>
                        <?php unset($_SESSION['erro_login']); ?>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label" style="font-family: 'Textos', sans-serif;">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required style="border: 1px solid black; border-radius: 5px; background-color: #f0f0f0;">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label" style="font-family: 'Textos', sans-serif;">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required style="border: 1px solid black; border-radius: 5px; background-color: #f0f0f0;">
                        </div>
                        <button type="submit" class="btn btn-roxo" style="font-family: 'Textos', sans-serif;">Entrar</button>
                    </form>
                    
                <?php endif; ?>
            </div>
            <div class="div2"></div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
