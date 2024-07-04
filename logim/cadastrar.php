<?php
include('../admin/includes/config.inc.php');
include('../admin/includes/conexao.php');

$password = password_hash("test", PASSWORD_BCRYPT, ["cost" => 12]);

$sql = "INSERT INTO usuario (Nome, Email, Senha) VALUES (:nome, :email, :password)";

$insert_data = $pdo->prepare($sql);
$insert_data->bindParam(':nome', $_POST['nome']);
$insert_data->bindParam(':email', $_POST['email']);
$insert_data->bindParam(':password', $password);

if ($insert_data->execute()) {
    $_SESSION['msg'] = '<p style="color:green,backgroud:#fff;"> Seus dados foram salvos.</p>';
    header('Location:' . BASE_URL . 'index.php');
} else {
    $_SESSION['msg'] = '<p style="color:tomato;background:#fff;"> Não foi possível enviar suas informações, verifique e tente novamente.</p>';
    header('Location:' . BASE_URL . 'logim/login.php');
}
