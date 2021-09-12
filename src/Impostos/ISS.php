<?php

namespace Source\Impostos;

use Source\Orcamento;

Class ISS implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float {
    return $orcamento->valor * 0.06;
  }
}