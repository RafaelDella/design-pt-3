<?php
require_once 'Luta.php';
require_once 'LutaReal.php';

class LutaProxy implements Luta {
    private ?LutaReal $lutaReal = null;
    private bool $autorizado;

    public function __construct(bool $autorizado) {
        $this->autorizado = $autorizado;
    }

    private function getLutaReal(): LutaReal {
        if ($this->lutaReal === null) {
            $this->lutaReal = new LutaReal();
        }
        return $this->lutaReal;
    }

    public function marcarPonto(): void {
        if ($this->autorizado) {
            $this->getLutaReal()->marcarPonto();
        } else {
            echo "<p style='color:red;'>🚫 Acesso negado! Você não pode marcar pontos nesta luta.</p>";
        }
    }

    public function decrementarFalta(): void {
        if ($this->autorizado) {
            $this->getLutaReal()->decrementarFalta();
        } else {
            echo "<p style='color:red;'>🚫 Acesso negado! Você não pode alterar as faltas.</p>";
        }
    }

    public function encerrarLuta(): void {
        if ($this->autorizado) {
            $this->getLutaReal()->encerrarLuta();
        } else {
            echo "<p style='color:red;'>🚫 Acesso negado! Somente árbitros podem encerrar a luta.</p>";
        }
    }
}
?>
