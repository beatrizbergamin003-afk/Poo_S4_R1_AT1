<?php 
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

// Instanciando Funcionario CLT
$clt = new FuncionarioCLT(
    "Beatriz Neves",
    "beatriz@gmail.com",
    "(19) 99999-1111",
    "10/11/2000",
    "Desenvolvedor Backend",
    "Rua A, 123",
    4000.00,
    1001,
    "123.456.789-00",
    0.11, //inss 
    2 // 2 faltas
);

//Instanciando Funcionario PJ
$pj = new FuncionarioPJ(
    "Tech Solutions",
    "contato@techsolutions.com",
    "(19) 98888-2222",
    "01/01/2020",
    "Consultor de Software",
    "Av. B, 500",
    8000.00,
    2002,
    "12.345.678/0001-90",
    0.06, //imposto
    1, //1 falta
    1.0, //taxa por falta
    500.00 // benefícios
);

echo $clt->contratar();
echo $clt->getDados();
echo "Salário Líquido CLT: " . $clt->calcularSalario() . "\n\n";

echo $pj->contratar();
echo $pj->getDados();
echo "Salário Líquido PJ: " . $pj->calcularSalario() . "\n\n";

echo $clt->demitir();
echo $pj->demitir();
?>




