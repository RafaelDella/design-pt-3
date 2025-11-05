<?php
interface Luta {
    public function marcarPonto(): void;
    public function encerrarLuta(): void;
    public function decrementarFalta(): void;
}
?>
