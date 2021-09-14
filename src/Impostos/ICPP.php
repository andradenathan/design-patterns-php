<?php

namespace Source\Impostos;

use Source\Orcamento;

class ICPP extends DuasAliquotas 
{
  public function calculaImposto(Orcamento $orcamento): float {
    if($this->deveAplicarTaxaMaxima($orcamento))
      return $orcamento->valor * 0.03;
    
    return $this->calculaTaxaMinima($orcamento);
  }
  
  public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool {
    return $orcamento->valor > 500;
  }

  public function calculaTaxaMaxima(Orcamento $orcamento): float {
    return $orcamento->valor * 0.03;
  }

  public function calculaTaxaMinima(Orcamento $orcamento): float {
    return $orcamento->valor * 0.02;
  }
}