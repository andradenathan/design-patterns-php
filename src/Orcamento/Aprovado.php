<?php

namespace Source\Orcamento;

use Source\Orcamento;
use Source\Orcamento\Finalizado;

Class Aprovado extends Status
{
  public function calculaDescontoExtra(Orcamento $orcamento): float {
    return $orcamento->valor * 0.02;
  }

  public function finaliza(Orcamento $orcamento) {
    $orcamento->status = new Finalizado();
  }
}