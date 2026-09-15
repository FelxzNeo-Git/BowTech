<?php
session_start();

$nome     = $_POST['Nome'] ?? $_SESSION['usuario_nome'] ?? 'Não informado';
$idade    = $_POST['Idade'] ?? $_SESSION['usuario_idade'] ?? 'Não informada';
$telefone = $_POST['Telefone'] ?? $_SESSION['usuario_telefone'] ?? 'Não informado';
$email    = $_POST['E_mail'] ?? $_SESSION['usuario_email'] ?? 'Não informado';
$senha    = $_POST['senha'] ?? $_POST['Senha'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['sign-in'] = true;
    $_SESSION['usuario_nome'] = $nome;
    $_SESSION['usuario_idade'] = $idade;
    $_SESSION['usuario_telefone'] = $telefone;
    $_SESSION['usuario_email'] = $email;

    header('Location: home.php');
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Cadastro</title>
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>
    <header class="top-bar">
        <span>📸 @BT_TECH</span>
        <span>💬 +99 99999-9999</span>
        <span>📧 BTTECH@gmail.com</span>
        <span>📍 280748-90</span>
    </header>

    <div class="form-actions">
        <a href="home.php" class="link">← Voltar para a Home</a>
    </div>

    <div class="header-titles">
        <h1 class="title-badge">Informações</h1>
        <h2 class="subtitle"><?php echo htmlspecialchars($nome); ?></h2>
    </div>

    <div class="form-container">
        <img src="css/img/user-interface.png" alt="Foto do usuário" class="card" width="100">
       
        <div class="dado-linha">
            <span class="dado-rotulo">Nome:</span>
            <span class="dado-valor"><?php echo htmlspecialchars($nome); ?></span>
        </div>

        <div class="dado-linha">
            <span class="dado-rotulo">Idade:</span>
            <span class="dado-valor"><?php echo htmlspecialchars($idade); ?></span>
        </div>

        <div class="dado-linha">
            <span class="dado-rotulo">Telefone:</span>
            <span class="dado-valor"><?php echo htmlspecialchars($telefone); ?></span>
        </div>

        <div class="dado-linha">
            <span class="dado-rotulo">E-mail:</span>
            <span class="dado-valor"><?php echo htmlspecialchars($email); ?></span>
        </div>

        <div class="dado-linha">
            <span class="dado-rotulo">Senha:</span>
            <span class="dado-valor"><?php echo str_repeat('•', strlen($senha)); ?></span>
        </div>
    </div>
</body>
</html>