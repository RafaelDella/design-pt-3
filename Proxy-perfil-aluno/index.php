<?php
require_once 'classes/PerfilAlunoProxy.php';

// Simulando dois usuários: um autorizado e um não autorizado
$usuarioComPermissao = new PerfilAlunoProxy(true);
$usuarioSemPermissao = new PerfilAlunoProxy(false);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Proxy - Perfil de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🧑‍🎓 Proxy - Perfil de Aluno</h1>
        <p>Exemplo de aplicação do padrão <strong>Proxy</strong> em PHP.</p>

        <div class="card">
            <h2>Usuário com Permissão</h2>
            <?php $usuarioComPermissao->EditarPerfil(); ?>
        </div>

        <div class="card negado">
            <h2>Usuário sem Permissão</h2>
            <?php $usuarioSemPermissao->EditarPerfil(); ?>
        </div>
    </div>
</body>
</html>
