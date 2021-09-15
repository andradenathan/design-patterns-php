<?php

namespace Source\Orcamento;

use Source\Orcamento;

Class Reprovado extends Status
{
  public function calculaDescontoExtra(Orcamento $orcamento): float {
    throw new \DomainException(
      "Um orçamento reprovado ou finalizado não pode receber descontos."
    );
  }

  public function finaliza(Orcamento $orcamento) {
    $orcamento->status = new Finalizado();
  }
}