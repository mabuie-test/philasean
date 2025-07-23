<?php
header('Content-Type: application/json');
include('../php/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $pdo->prepare("SELECT * FROM orders");
    $stmt->execute();
    echo json_encode($stmt->fetchAll());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $stmt = $pdo->prepare("INSERT INTO orders (user_id, reference, status) VALUES (:user_id, :reference, :status)");
    $stmt->execute([
        'user_id' => $data['user_id'],
        'reference' => $data['reference'],
        'status' => 'pending'
    ]);

    echo json_encode(['success' => true]);
}
?>
