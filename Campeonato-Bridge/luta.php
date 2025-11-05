<?php
class Luta {
    private string $resultado;

    public function __construct() {
        $this->resultado = '';
    }

    public function lancarResultado(string $resultado): void {
        $this->resultado = $resultado;
    }

    public function getResultado(): string {
        return $this->resultado;
    }
}
?>
