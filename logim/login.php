<?php

// include('../admin/includes/config.inc.php');
// include('../admin/includes/conexao.php');

// $email = $_POST["email"];
// $password = $_POST["password"];

// $sql = "SELECT * FROM usuario WHERE Email = :email";
// $select_data = $pdo->prepare($sql);
// $select_data->bindParam(':email', $email);
// $select_data->execute();
// $user = $select_data->fetch(PDO::FETCH_ASSOC);

// if ($user) {
//     // Supondo que $password seja a senha fornecida pelo usuário
//     if (isset($user['senha_hash']) && password_verify($password, $user['senha_hash'])) {
//         // Senha correta, realizar as operações necessárias
//         var_dump($user); // Apenas para debug, remova isso em produção
//     } else {
//         // Senha incorreta, tratar o erro ou redirecionar para página de erro
//         echo "Credenciais inválidas."; // Mensagem genérica para segurança
//     }
// } else {
//     // Usuário não encontrado, tratar o erro ou redirecionar para página de erro
//     echo "Credenciais inválidas."; // Mensagem genérica para segurança
// }


include('../admin/includes/config.inc.php');
include('../admin/includes/conexao.php');

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuario WHERE Email = :email";
$select_data = $pdo->prepare($sql);
$select_data->bindParam(':email', $email);
$select_data->execute();
$user = $select_data->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // senha fornecida pelo usuário
    if (password_verify($password, $user['Senha'])) {
        $_SESSION['name'] = $user["Nome"];
        $_SESSION['email'] = $user["Email"];
        header("Location: " . BASE_URL . "index.php");
        exit;

        // Senha correta, realizar as operações necessárias
        var_dump($user); // Apenas para debug, remova isso em produção
    } else {
        // Senha incorreta, tratar o erro ou redirecionar para página de erro
        $_SESSION["error"] = '<div class="error-message">Senha incorreta. Por favor, tente novamente.</div>';
        header("Location: " . BASE_URL . "logim/index.php");
        exit;
    }
} else {
    // Usuário não encontrado, tratar o erro ou redirecionar para página de erro
    $_SESSION["error"] = '<div class="error-message">usuario nao encontrado.</div>';
    header("Location: " . BASE_URL . "logim/index.php");
}
