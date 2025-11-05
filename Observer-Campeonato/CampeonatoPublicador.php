<?php
require_once "Usuario.php";
require_once "EmailNotificacao.php";

class CampeonatoPublicador {
    private $seguidores = [];
    private $notificador;

    public function __construct() {
        $this->notificador = new EmailNotificacao();
    }

    public function Acompanhar(Usuario $u) {
        $this->seguidores[$u->email] = $u;
        return "{$u->nome} agora está acompanhando o campeonato.";
    }

    public function Desacompanhar(Usuario $u) {
        if (isset($this->seguidores[$u->email])) {
            unset($this->seguidores[$u->email]);
            return "{$u->nome} deixou de acompanhar o campeonato.";
        }
        return "{$u->nome} não estava acompanhando.";
    }

    public function NotificarTodos() {
        $mensagens = [];
        foreach ($this->seguidores as $usuario) {
            $mensagens[] = $this->notificador->NotificarDestinatario($usuario);
        }
        if (empty($mensagens)) {
            $mensagens[] = "⚠️ Nenhum seguidor para notificar.";
        }
        return $mensagens;
    }

    public function getSeguidores() {
        return $this->seguidores;
    }
}
?>
