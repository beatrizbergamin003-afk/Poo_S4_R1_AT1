<?php 
require_once 'FuncionarioRepository.php';

class FuncionarioPJ extends FuncionarioRepository {
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
        private string $cnpj,
        private float $inss = 0.0,       
        private float $faltas = 0,       
        private float $taxaFaltas = 1.0, 
        private float $beneficios = 0.0  
    ) {
        parent::__construct($nome, $email, $telefone, $nascimento, $cargo, $endereco, $salario, $nif);
    }

    public function getCnpj(): string { return $this->cnpj; }

   #[Override]
public function getDados(): string {
    return "[PJ]\n" .
           "Nome: {$this->getNome()}\n" .
           "CNPJ: {$this->cnpj}\n" .
           "Email: {$this->getEmail()}\n" .
           "Cargo: {$this->getCargo()}\n" .
           "Valor Contrato: R$ " . number_format($this->getSalario(), 2, ',', '.') . "\n" .
           "Benefícios: R$ " . number_format($this->beneficios, 2, ',', '.') . "\n";
}

    #[Override]
    public function calcularSalario(): string {
        $descontoImposto = $this->getSalario() * $this->inss;
        $valorDia = $this->getSalario() / 30;
        $descontoFaltas = ($valorDia * $this->faltas) * $this->taxaFaltas;

        $salarioLiquido = $this->getSalario() - $descontoImposto - $descontoFaltas + $this->beneficios;
        return "R$ " . number_format($salarioLiquido, 2, ',', '.');
    }
}
?>