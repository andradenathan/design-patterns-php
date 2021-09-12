<?php

namespace Source\Impostos;

use Source\Orcamento;

interface Imposto 
{
  public function calculaImposto(Orcamento $orcamento): float;
}
