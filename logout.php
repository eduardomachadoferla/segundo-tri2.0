<?php
session_start(); // Inicia a sessão (se ainda não estiver iniciada)

// Remove todas as variáveis de sessão
$_SESSION = array();

// Se necessário, também destrua a sessão
// Nota: Isso também irá destruir a sessão atual, e não apenas os dados da sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destrói a sessão
session_destroy();

// Redireciona para a página de login ou para onde desejar após o logout
header("Location: logim/index.php"); // Altere para o local correto após o logout
exit();
?>
