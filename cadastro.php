<?php
session_start();
$titulo = 'Cadastro';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>

    <header class="top-bar">
        <span>📸 @BT_TECH</span>
        <span>💬 +99 99999-9999</span>
        <span>📧 BTTECH@gmail.com</span>
        <span>📍 280748-90</span>

       
        </div>
    </header>

    <div class="header-titles">
        <h1 class="title-badge"><?php echo $titulo; ?></h1>
        <h2 class="subtitle-badge">Seja bem-vindo!</h2>
    </div>

    <div class="form-container">
        <form action="processa_cadastro.php" method="POST">           
            <div class="form-group">
                <label for="Nome">Nome:</label>
                <input type="text" id="Nome" name="Nome" required>
            </div>
            <div class="form-group">
                <label for="Idade">Idade:</label>
                <input type="number" id="Idade" name="Idade" required>
            </div>
            <div class="form-group">
                <label for="Telefone">Telefone:</label>
                <input type="tel" id="Telefone" name="Telefone" required>
            </div>
            <div class="form-group">
                <label for="E_mail">E-mail:</label>
                <input type="email" id="E_mail" name="E_mail" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-actions">
                <button type="submit">Enviar</button>
            </div>

        </form>
    </div>

</body>
</html>