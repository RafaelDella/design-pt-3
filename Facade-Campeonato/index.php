<?php
require_once "CampeoaFacade.php";

$resultado = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $facade = new CampeoaFacade();
    $nomeAcademia = $_POST['academia'] ?? 'Academia Desconhecida';
    $resultado = $facade->organizarCampeonato($nomeAcademia);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Campeonato de Artes Marciais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🏆 Sistema de Campeonato</h1>
        <form method="POST">
            <label for="academia">Nome da Academia:</label>
            <input type="text" id="academia" name="academia" required>
            <button type="submit">Organizar Campeonato</button>
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
