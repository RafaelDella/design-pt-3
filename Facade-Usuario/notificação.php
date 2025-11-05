<?php
class Notificacao {
    private $TipoNotificacao;

    public function __construct($tipo = 1) {
        $this->TipoNotificacao = $tipo;
    }

    public function GerenciarNotificacao($not) {
        $tipos = [
            1 => "E-mail",
            2 => "SMS",
            3 => "Push Notification"
        ];
        $tipo = $tipos[$not->TipoNotificacao] ?? "Desconhecido";
        return "Notificação gerenciada com sucesso via {$tipo}!";
    }
}
?>
