<?php
header('Content-Type: application/json');
include('../php/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE role = 'admin'");
    $stmt->execute();
    echo json_encode($stmt->fetchAll());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, 'admin')");
    $stmt->execute([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT)
    ]);

    echo json_encode(['success' => true]);
}
?>

