<?php

namespace Source\Impostos;

use Source\Orcamento;

abstract class DuasAliquotas implements Imposto 
{
  public function calculaImposto(Orcamento $orcamento): float {
    if($this->deveAplicarTaxaMaxima($orcamento)) {
      return $this->calculaTaxaMaxima($orcamento);
    }

    return $this->calculaTaxaMinima($orcamento);
  }

  abstract public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
  abstract public function calculaTaxaMinima(Orcamento $orcamento): float;
  abstract public function calculaTaxaMaxima(Orcamento $orcamento): float;
}