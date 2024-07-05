<?php
 
try {
    $pdo = new PDO ("mysql:host=" . DB_HOST . ";dbname=".DB_BASE, DB_NAME, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'suss';
}catch (PDOException $e) {
    die("erro de conexão: " . $e->getMessage());
}
// <?php

// try {
//     $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_BASE, DB_NAME, DB_PASS);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Conexão bem sucedida!'; // Esta mensagem será exibida se a conexão for estabelecida corretamente
// } catch (PDOException $e) {
//     die("Erro de conexão: " . $e->getMessage());
// }

// ?>   