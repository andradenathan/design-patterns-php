<?php

require 'vendor/autoload.php';

use Source\Orcamento;
use Source\Calculadora;
use Source\Impostos\ICMS;

$calculadora = new Calculadora();
$orcamento = new Orcamento();
$orcamento->valor = 17653.96;
$icms = new ICMS();

echo "{$calculadora->calcula($orcamento, $icms)}\n"; 