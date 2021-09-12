<?php

namespace Source;

use Source\Impostos\Imposto;

Class Calculadora 
{
  public function calcula(Orcamento $orcamento, Imposto $imposto): float {
    return $imposto->calculaImposto($orcamento);
  }
}