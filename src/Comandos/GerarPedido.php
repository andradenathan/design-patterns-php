<?php

namespace Source\Comandos;

use Source\Orcamento;
use Source\Pedido;

class GerarPedido
{
  private float $valorOrcamento;
  private int $quantidadeItens;
  private string $nomeCliente;

  public function __construct(
    float $valorOrcamento, 
    int $quantidadeItens,
    string $nomeCliente,
    ) {
      $this->valorOrcamento = $valorOrcamento;
      $this->quantidadeItens = $quantidadeItens;
      $this->nomeCliente = $nomeCliente;
  }

  public function getQuantidadeItens(): int {
    return $this->quantidadeItens;
  }

  public function getNomeCliente(): string {
    return $this->nomeCliente;
  }

  public function getValorOrcamento(): int {
    return $this->valorOrcamento;
  }
}