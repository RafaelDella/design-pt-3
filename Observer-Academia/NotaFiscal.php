<?php
require_once 'Pagamento.php';

class NotaFiscal implements Pagamento {
    public function emitirNotaFiscal() {
        return "📄 Nota fiscal emitida.\n";
    }

    public function enviarNotaFiscalEmail() {
        return "📧 Nota fiscal enviada por e-mail.\n";
    }

    public function operation($mensagem) {
        return "[NotaFiscal] " . $this->emitirNotaFiscal() . $this->enviarNotaFiscalEmail();
    }
}
