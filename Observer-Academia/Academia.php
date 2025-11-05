<?php
class Academia {
    private $matriculas_alunos = [];
    private $observadores = [];

    public function adicionarObservador($observador) {
        $this->observadores[] = $observador;
    }

    public function removerObservador($observador) {
        $this->observadores = array_filter($this->observadores, fn($o) => $o !== $observador);
    }

    public function notificarObservadores($mensagem) {
        $saida = "";
        foreach ($this->observadores as $obs) {
            $saida .= $obs->operation($mensagem);
        }
        return $saida;
    }

    public function receberPagamento() {
        $mensagem = "Pagamento recebido com sucesso!";
        $saida  = "🏦 Academia: $mensagem\n";
        $saida .= $this->notificarObservadores($mensagem);
        return $saida;
    }

    public function gerenciarMatricula(array $matriculas) {
        $this->matriculas_alunos = $matriculas;
    }

    public function getMatriculas() {
        return $this->matriculas_alunos;
    }
}
