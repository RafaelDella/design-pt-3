<?php
require_once "UsuarioFacade.php";

$resultado = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $facade = new UsuarioFacade($nome, $cpf, $email);
    $resultado = $facade->interagirSistema();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuário - Facade Pattern</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>👤 Sistema de Usuário (Facade)</h1>
        <form method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>CPF:</label>
            <input type="text" name="cpf" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Executar Facade</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <div class="resultado">
                <h2>Resultado:</h2>
                <ul>
                    <?php foreach ($resultado as $linha): ?>
                        <li><?= htmlspecialchars($linha) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
