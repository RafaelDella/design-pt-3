<?php
require_once 'classes/Campeonato.php';
require_once 'classes/Lutar.php';
require_once 'classes/Luta.php';

$chaveamento = new Lutar();
$campeonato = new Campeonato($chaveamento);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bridge - Campeonato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🏆 Sistema de Campeonato (Bridge)</h1>
        <p>Este é um exemplo de aplicação do padrão <strong>Bridge</strong>.</p>

        <div class="card">
            <?php $campeonato->gerenciarChaveamento(); ?>
        </div>
    </div>
</body>
</html>
