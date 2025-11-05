<?php
interface Pagamento {
    public function processarPagamento(float $valor);
}
