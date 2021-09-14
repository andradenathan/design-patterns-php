<?php

require 'vendor/autoload.php';

use Source\Orcamento;
use Source\CalculadoraDeDescontos;

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 6500.0;
$orcamento->quantidadeItens = 10;

echo "{$calculadora->calculaDesconto($orcamento)}\n"; 