<?php 
require_once 'FuncionarioRepository.php';

class FuncionarioCLT extends FuncionarioRepository {
    // #[Override] removido do construtor
    public function __construct(
        string $nome,
        string $email,
        string $telefone,
        string $nascimento,
        string $cargo,
        string $endereco,
        float $salario,
        int $nif,
        private string $cpf,
        private float $inss = 0.11,     
        private float $faltas = 0,      
        private float $taxaFaltas = 1.0 
    ) {
        parent::__construct($nome, $email, $telefone, $nascimento, $cargo, $endereco, $salario, $nif);
    }

    public function getCpf(): string { return $this->cpf; }

  #[Override]
public function getDados(): string {
    return "[CLT]\n" .
           "Nome: {$this->getNome()}\n" .
           "CPF: {$this->cpf}\n" .
           "Email: {$this->getEmail()}\n" .
           "Cargo: {$this->getCargo()}\n" .
           "Salário Base: R$ " . number_format($this->getSalario(), 2, ',', '.') . "\n";
}

    #[Override]
    public function calcularSalario(): string {
        $descontoInss = $this->getSalario() * $this->inss;
        $valorDia = $this->getSalario() / 30;
        $descontoFaltas = ($valorDia * $this->faltas) * $this->taxaFaltas;

        $salarioLiquido = $this->getSalario() - $descontoInss - $descontoFaltas;
        return "R$ " . number_format($salarioLiquido, 2, ',', '.');
    }
}
?>