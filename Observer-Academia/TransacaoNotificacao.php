<?php
require_once 'Pagamento.php';

class TransacaoNotificacao implements Pagamento {
    public function notificarBeneficiario() {
        return "✔ Beneficiário notificado sobre o pagamento.\n";
    }

    public function operation($mensagem) {
        return "[TransaçãoNotificação] " . $this->notificarBeneficiario();
    }
}
