<?php
$host    = 'localhost';
$dbname  = 'philaded_Philaseanproviderwebsite';
$user    = 'philaded_Philaseanproviderwebsite';
$pass    = 'Philaseanproviderwebsite';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}
?>
