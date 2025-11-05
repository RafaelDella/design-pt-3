<?php
require_once "Categoria.php";
require_once "Luta.php";
require_once "Academia.php";

class CampeoaFacade {
    private $categoria;
    private $luta;
    private $academia;

    public function __construct() {
        $this->categoria = new Categoria();
        $this->luta = new Luta();
        $this->academia = new Academia();
    }

    public function organizarCampeonato($nomeAcademia) {
        $resultado = [];
        $resultado[] = $this->categoria->FiscalizarCategorias();
        $resultado[] = $this->luta->FormarLutas();
        $resultado[] = $this->academia->GerenciarInscricao($nomeAcademia);
        return $resultado;
    }
}
?>
