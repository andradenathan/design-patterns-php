<?php

namespace Source\Orcamento;

use Source\Orcamento;

Class Finalizado extends Status
{
  public function calculaDescontoExtra(Orcamento $orcamento): float {
    throw new \DomainException(
      "Um orçamento finalizado não pode calcular desconto."
    );
  }
}