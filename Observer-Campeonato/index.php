<?php
require_once "CampeonatoPublicador.php";

session_start();

if (!isset($_SESSION['campeonato'])) {
    $_SESSION['campeonato'] = new CampeonatoPublicador();
}

$campeonato = $_SESSION['campeonato'];
$mensagens = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $acao = $_POST['acao'] ?? '';

    if (!empty($nome) && !empty($email)) {
        $usuario = new Usuario($nome, $email);

        if ($acao === 'seguir') {
            $mensagens[] = $campeonato->Acompanhar($usuario);
        } elseif ($acao === 'desseguir') {
            $mensagens[] = $campeonato->Desacompanhar($usuario);
        } elseif ($acao === 'notificar') {
            $mensagens = $campeonato->NotificarTodos();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Observer - Campeonato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🏆 Sistema de Campeonato (Observer)</h1>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <div class="botoes">
            <button type="submit" name="acao" value="seguir">👥 Seguir Campeonato</button>
            <button type="submit" name="acao" value="desseguir">🚫 Deixar de Seguir</button>
            <button type="submit" name="acao" value="notificar">📢 Notificar Seguidores</button>
        </div>
    </form>

    <?php if (!empty($mensagens)): ?>
        <div class="resultado">
            <h2>Resultado:</h2>
            <ul>
                <?php foreach ($mensagens as $msg): ?>
                    <li><?= htmlspecialchars($msg) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="seguidores">
        <h2>👤 Seguidores Atuais:</h2>
        <ul>
            <?php foreach ($campeonato->getSeguidores() as $seguidor): ?>
                <li><?= htmlspecialchars($seguidor->nome . " (" . $seguidor->email . ")") ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>
