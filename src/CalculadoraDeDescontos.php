<?php

namespace Source;

use Source\Descontos\Desconto;
use Source\Orcamento;
use Source\Descontos\Itens;
use Source\Descontos\ItensCaros;
use Source\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
  public function calculaDesconto(Orcamento $orcamento): float {
    $cadeiaDeDescontos = new Itens(new ItensCaros(new SemDesconto()));
    return $cadeiaDeDescontos->calculaDesconto($orcamento);
  }
}