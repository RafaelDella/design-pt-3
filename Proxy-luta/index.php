<?php
require_once 'classes/LutaProxy.php';

// Simula dois usuários: árbitro e espectador
$arbitro = new LutaProxy(true);
$espectador = new LutaProxy(false);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Proxy - Luta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🥋 Proxy - Luta</h1>
        <p>Exemplo de aplicação do padrão <strong>Proxy</strong> no contexto de uma luta esportiva.</p>

        <div class="card">
            <h2>Árbitro (tem permissão)</h2>
            <?php
                $arbitro->marcarPonto();
                $arbitro->decrementarFalta();
                $arbitro->encerrarLuta();
                $arbitro->marcarPonto(); // teste após encerramento
            ?>
        </div>

        <div class="card negado">
            <h2>Espectador (sem permissão)</h2>
            <?php
                $espectador->marcarPonto();
                $espectador->encerrarLuta();
            ?>
        </div>
    </div>
</body>
</html>
