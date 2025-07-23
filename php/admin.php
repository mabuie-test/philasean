<?php
session_start();
include('db.php');

if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM orders");
$stmt->execute();
$orders = $stmt->fetchAll();

foreach ($orders as $order) {
    echo "Pedido: " . $order['reference'] . " Status: " . $order['status'] . "<br>";
}
?>
