<?php

// Inicia a sessão se ainda não estiver iniciada
session_start();

// Encerra a sessão (logout)
session_destroy();

// Redireciona para a página de login, por exemplo
header('Location: ./logim/index.php');
exit;
?>

