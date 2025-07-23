<?php
$host = 'localhost';
$dbname = 'philasean';
$user = 'root'; // Atualize com o usuário do seu banco de dados
$pass = ''; // Atualize com a senha do seu banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}
?>
