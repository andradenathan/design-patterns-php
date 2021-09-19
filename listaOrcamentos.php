<?php

require_once 'vendor/autoload.php';

use Source\Listas\ListaDeOrcamentos;
use Source\Orcamento;

$lista = new ListaDeOrcamentos();
$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 3000.00;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 10;
$orcamento2->aprova();
$orcamento2->valor = 2639.99;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 7;
$orcamento3->aprova();
$orcamento3->valor = 45976.79;

$orcamento4 = new Orcamento();
$orcamento4->quantidadeItens = 10;
$orcamento4->valor = 109353.00;
$orcamento4->aprova();
$orcamento4->finaliza();

$lista->addOrcamento($orcamento1);
$lista->addOrcamento($orcamento2);
$lista->addOrcamento($orcamento3);
$lista->addOrcamento($orcamento4);
$lista->orcamentosFinalizados();

foreach($lista as $orcamento) {
  echo "Valor: " . $orcamento->valor . PHP_EOL;
  echo "Estado: " . get_class($orcamento->status) . PHP_EOL;
  echo "Quantidade de Itens: " . $orcamento->quantidadeItens . PHP_EOL;
  echo "-------" . PHP_EOL;
}