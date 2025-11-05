<?php
require_once "Notificacao.php";

class EmailNotificacao implements Notificacao {
    public function NotificarDestinatario(Usuario $destinatario) {
        return "📧 Notificação enviada para {$destinatario->nome} ({$destinatario->email}) via E-mail.";
    }

    public function notificar() {
        return "E-mail de atualização do campeonato enviado!";
    }
}
?>
