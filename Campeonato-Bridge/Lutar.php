<?php
require_once 'Chaveamento.php';
require_once 'Luta.php';

class Lutar implements Chaveamento {
    public function processarEstadoLuta(Luta $luta): void {
        echo "<p>Processando luta... Resultado: <strong>" . $luta->getResultado() . "</strong></p>";
    }
}
?>
