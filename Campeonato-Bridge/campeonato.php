<?php
require_once 'Chaveamento.php';
require_once 'Luta.php';

class Campeonato {
    private Chaveamento $chaveamento;

    public function __construct(Chaveamento $chaveamento) {
        $this->chaveamento = $chaveamento;
    }

    public function gerenciarChaveamento(): void {
        $luta = new Luta();
        $luta->lancarResultado('V');
        $this->chaveamento->processarEstadoLuta($luta);
    }
}
?>
