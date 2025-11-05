<?php
require_once 'Luta.php';

class LutaReal implements Luta {
    private int $pontos = 0;
    private int $faltas = 3;
    private bool $encerrada = false;

    public function marcarPonto(): void {
        if (!$this->encerrada) {
            $this->pontos++;
            echo "<p>🥋 Ponto marcado! Total de pontos: <strong>{$this->pontos}</strong></p>";
        } else {
            echo "<p style='color:red;'>A luta já está encerrada. Não é possível marcar mais pontos.</p>";
        }
    }

    public function decrementarFalta(): void {
        if (!$this->encerrada) {
            $this->faltas--;
            echo "<p>⚠️ Falta cometida. Faltas restantes: <strong>{$this->faltas}</strong></p>";
            if ($this->faltas <= 0) {
                $this->encerrarLuta();
            }
        } else {
            echo "<p style='color:red;'>Luta encerrada. Nenhuma falta pode ser alterada.</p>";
        }
    }

    public function encerrarLuta(): void {
        $this->encerrada = true;
        echo "<p>🏁 Luta encerrada!</p>";
    }

    public function isEncerrada(): bool {
        return $this->encerrada;
    }
}
?>
