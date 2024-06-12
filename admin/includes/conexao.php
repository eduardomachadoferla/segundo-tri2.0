<?php
 
try {
    $pdo = new PDO ("mysql:host=" . DB_HOST . ";dbname" .DB_BASE, DB_NAME, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch (PDOException $e) {
    die("erro de conexão: " . $e->getMessage());
}