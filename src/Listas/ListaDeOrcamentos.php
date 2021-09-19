<?php

namespace Source\Listas;

use IteratorAggregate;
use Source\Orcamento;
use Source\Orcamento\Finalizado;

class ListaDeOrcamentos implements IteratorAggregate
{
  /** @var Orcamento[] */
  private array $orcamentos;

  public function __construct() {
    $this->orcamentos = [];
  }

  public function addOrcamento(Orcamento $orcamento) {
    $this->orcamentos[] = $orcamento;
  }

  public function orcamentosFinalizados(): array {
    return array_filter(
      $this->orcamentos,
      fn($orcamento) => $orcamento->status instanceof Finalizado
    );
  }

  public function getIterator() {
    return new \ArrayIterator($this->orcamentos);
  }
}