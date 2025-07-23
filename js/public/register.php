<?php include("php/register.php"); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro | PHIL ASEAN PROVIDER & LOGISTICS</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Registrar</h1>
    </header>

    <div class="container">
        <form id="registerForm" method="POST">
            <div>
                <label for="name">Nome Completo:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>

    <footer>
        <p>© 2025 PHIL ASEAN PROVIDER & LOGISTICS. Todos os direitos reservados.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
