<?php
include('../admin/includes/config.inc.php');
include('../admin/includes/conexao.php');

$usuario = $_POST["email"];
$usuario = $_POST["password"];

$sql = "SELECT * FROM usuario WHERE Email = :email";
$select_data = $pdo->prepare($sql);
$select_data->bindParam(':email', $usuario);
$user = $select_data->fetch(PDO::FETCH_ASSOC);
var_dump($user);
