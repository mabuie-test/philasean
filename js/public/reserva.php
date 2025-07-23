<?php include("php/reserva.php"); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área do Cliente | PHIL ASEAN PROVIDER & LOGISTICS</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Área do Cliente</h1>
    </header>

    <div class="container">
        <h2>Meus Pedidos</h2>
        <ul>
            <?php foreach ($orders as $order): ?>
                <li><?php echo $order['reference']; ?> - Status: <?php echo $order['status']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer>
        <p>© 2025 PHIL ASEAN PROVIDER & LOGISTICS. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

