<?php
require_once 'MeuPerfilAluno.php';

class PerfilAlunoReal implements MeuPerfilAluno {
    private string $nome;
    private string $curso;

    public function __construct(string $nome, string $curso) {
        $this->nome = $nome;
        $this->curso = $curso;
    }

    public function EditarPerfil(): void {
        echo "<p>Perfil atualizado com sucesso!</p>";
        echo "<p><strong>Nome:</strong> {$this->nome}</p>";
        echo "<p><strong>Curso:</strong> {$this->curso}</p>";
    }
}
?>
