<?php 
require_once 'FuncionarioInterface.php';

abstract class FuncionarioRepository implements FuncionarioInterface {
    protected bool $ativo = false;

    // Todos os parâmetros com valor padrão ficam organizados no final
    public function __construct(
        protected string $nome,
        protected string $email,
        protected string $telefone = '',
        protected string $nascimento = '',
        protected string $cargo = '',
        protected string $endereco = '',
        protected float $salario = 0.0,
        protected int $nif = 0
    ) {}

    public function getNome(): string { return $this->nome; }
    public function getEmail(): string { return $this->email; }
    public function getTelefone(): string { return $this->telefone; }
    public function getNascimento(): string { return $this->nascimento; }
    public function getCargo(): string { return $this->cargo; }
    public function getEndereco(): string { return $this->endereco; }
    public function getSalario(): float { return $this->salario; }
    public function getNif(): int { return $this->nif; }
    public function isAtivo(): bool { return $this->ativo; }

    public function contratar(): string {
        if (!$this->ativo) {
            $this->ativo = true;
            return "Funcionário {$this->nome} contratado com sucesso!\n";
        }
        return "Funcionário {$this->nome} já se encontra ativo.\n";
    }

    public function demitir(): string {
        if ($this->ativo) {
            $this->ativo = false;
            return "Funcionário {$this->nome} foi desligado do sistema.\n";
        }
        return "Funcionário {$this->nome} já se encontra inativo.\n";
    }

    abstract public function getDados(): string;
    abstract public function calcularSalario(): string;
}
?>