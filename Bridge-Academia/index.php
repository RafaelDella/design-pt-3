<?php
require_once 'classes/GerenciarMatricula.php';
require_once 'classes/TipoPagamento.php';
require_once 'classes/NotaFiscal.php';

// Seleciona a forma de pagamento (Bridge)
$tipoPagamento = new TipoPagamento();
$notaFiscal = new NotaFiscal();

// Cria a academia com a forma de pagamento desejada
$academia = new GerenciarMatricula($tipoPagamento);
$academia->gerenciarMatricula("João da Silva");
$resultado1 = $academia->processarPagamento(120);

// Troca a implementação da ponte (Bridge) para outra
$academia->setFormaPagamento($notaFiscal);
$resultado2 = $academia->processarPagamento(120);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Academia - Padrão Bridge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🏋️ Academia - Padrão Bridge</h1>

    <h2>Aluno matriculado</h2>
    <p><strong>João da Silva</strong> foi matriculado com sucesso.</p>

    <div class="resultado">
        <h2>Pagamentos processados</h2>
        <pre><?= htmlspecialchars($resultado1) ?></pre>
        <pre><?= htmlspecialchars($resultado2) ?></pre>
    </div>
</div>
</body>
</html>
