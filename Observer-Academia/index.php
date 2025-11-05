<?php
require_once 'classes/Academia.php';
require_once 'classes/TransacaoNotificacao.php';
require_once 'classes/NotaFiscal.php';

// Instancia a academia (Subject)
$academia = new Academia();

// Cria observadores (Observers)
$transacao = new TransacaoNotificacao();
$notaFiscal = new NotaFiscal();

// Registra os observadores
$academia->adicionarObservador($transacao);
$academia->adicionarObservador($notaFiscal);

// Adiciona alunos
$academia->gerenciarMatricula(['João', 'Maria', 'Carla']);

// Realiza o pagamento (isso deve notificar os observadores)
$resultado = $academia->receberPagamento();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Academia - Padrão Observer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🏋️ Academia - Sistema de Pagamento (Observer)</h1>

    <h2>Alunos matriculados</h2>
    <ul>
        <?php foreach ($academia->getMatriculas() as $aluno): ?>
            <li><?= htmlspecialchars($aluno) ?></li>
        <?php endforeach; ?>
    </ul>

    <div class="resultado">
        <h2>Notificações geradas</h2>
        <pre><?= htmlspecialchars($resultado) ?></pre>
    </div>
</div>
</body>
</html>
