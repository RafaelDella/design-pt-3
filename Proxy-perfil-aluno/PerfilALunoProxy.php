<?php
require_once 'MeuPerfilAluno.php';
require_once 'PerfilAlunoReal.php';

class PerfilAlunoProxy implements MeuPerfilAluno {
    private ?PerfilAlunoReal $perfilReal = null;
    private bool $temPermissao;

    public function __construct(bool $temPermissao) {
        $this->temPermissao = $temPermissao;
    }

    public function EditarPerfil(): void {
        if ($this->temPermissao) {
            $this->perfilReal = new PerfilAlunoReal("Maria Silva", "Engenharia de Software");
            $this->perfilReal->EditarPerfil();
        } else {
            echo "<p style='color:red;'>Acesso negado! Você não tem permissão para editar o perfil.</p>";
        }
    }
}
?>
