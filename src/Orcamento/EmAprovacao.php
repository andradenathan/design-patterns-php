<?php

namespace Source\Orcamento;

use Source\Orcamento;

Class EmAprovacao extends Status
{
  public function calculaDescontoExtra(Orcamento $orcamento): float {
    return $orcamento->valor * 0.05;
  }

  public function aprova(Orcamento $orcamento): void {
    $orcamento->status = new Aprovado();
  }

  public function reprova(Orcamento $orcamento): void {
    $orcamento->status = new Reprovado();
  }
}