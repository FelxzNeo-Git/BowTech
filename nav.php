<?php
if (isset($_SESSION['sign-in']) && $_SESSION['sign-in'] === true) {
    echo '<a href="processa_cadastro.php" title="Ir para o Perfil">
            <img src="css/img/user-interface.png" alt="Foto de Perfil" class="user-avatar" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; vertical-align: middle;">
          </a>
          <a href="logout.php" style="margin-left: 10px; color: #c13431; text-decoration: none; font-weight: bold;">Sair</a>';
} else {
    echo '<a href="login.php">sign in</a> / <a href="cadastro.php">sign up</a>';
}
?>