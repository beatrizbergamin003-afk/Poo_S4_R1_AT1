# Diagrama de classes Funcionarios

```mermaid
classDiagram
FuncionarioInterface <|.. FuncionarioRepository : implements
FuncionarioRepository <|-- FuncionarioCLT : extends
FuncionarioRepository <|-- Funcionario PJ : extends

class FuncionarioInterface {
    <<interface>>
    + contratar() string
    + demitir() string 
}

class FuncionarioRepository {
    <<abstract>>
    # string nome
    # string email
    # string telefone
    # string nascimento
    # string cargo
    # string endereco
    # float salario
    # int nif
    # bool ativo
    + contratar() string
    + demitir() string
    + calcularSalario() string
    + getDados() string
}

class FuncionarioCLT {
    - string cpf
    - float inss
    - float faltas
    - float taxaFaltas 
    + getDados() string 
    + calcularSalario() string
  
}

class FuncionarioPJ {
    - string cnpj
    - float inss
    - float faltas
    - float taxaFaltas
    - float beneficios
    + getDados() string
    + calcularSalario() string
}