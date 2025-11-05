<?php
require_once "Campeonato.php";
require_once "Academia1.php";
require_once "Notificacao.php";

class UsuarioFacade {
    private $nome;
    private $cpf;
    private $email;
    private $campeonato;
    private $academia;
    private $notificacao;

    public function __construct($nome, $cpf, $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->campeonato = new Campeonato();
        $this->academia = new Academia1();
        $this->notificacao = new Notificacao();
    }

    public function interagirSistema() {
        $res = [];
        $res[] = "Usuário: {$this->nome} ({$this->email})";
        $res[] = $this->campeonato->SeguirCampeonato();
        $res[] = $this->academia->GerenciarMatricula($this->cpf);
        $res[] = $this->notificacao->GerenciarNotificacao($this->notificacao);
        return $res;
    }
}
?>
