<?php

// Inicia a sessão se ainda não estiver iniciada
session_start();

// Encerra a sessão (logout)
session_destroy();

// Redireciona para a página de login, 
header('Location: ./logim/index.php');
exit;
?>

