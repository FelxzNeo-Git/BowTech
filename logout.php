<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = array();

session_destroy();

// Redireciona o usuário de volta para a página inicial
header('Location: home.php');
exit();
?>  