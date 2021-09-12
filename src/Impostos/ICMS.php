<?php

namespace Source\Impostos;

use Source\Orcamento;

Class ICMS implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float {
    return $orcamento->valor * 0.1;
  }
}