<?php
session_start();

$erro = '';

if (isset($_SESSION['sign-in']) && $_SESSION['sign-in'] === true) {
    header('Location: home.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['E_mail'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($email) && !empty($senha)) {
        $_SESSION['sign-in'] = true;
        $_SESSION['usuario_email'] = $email;
        $_SESSION['usuario_nome'] = $_SESSION['usuario_nome'] ?? strstr($email, '@', true);

        header('Location: home.php');
        exit();
    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bowtech</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="fundo">

    <div class="header-titles">
        <h1 class="title-badge">Login</h1>
        <br>
        <h2 class="subtitle">Seja bem-vindo!</h2>
    </div>

    <div class="login-container">
        <?php if (!empty($erro)): ?>
            <p class="erro-msg"><?php echo $erro; ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="campo-linha">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="E_mail" class="li" placeholder="Seu E-mail" required>
            </div>

            <div class="campo-linha">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="li2" placeholder="Sua Senha" required>
            </div>

            <hr class="form-divider">

            <button type="submit" class="btn-entrar">Entrar</button>
        </form>

        <p style="margin-top: 20px; font-size: 0.9em; text-align: center;">
            Não tem uma conta? <a href="cadastro.php" class="link-cad">Cadastre-se</a>
        </p>
    </div>

</body>
</html>