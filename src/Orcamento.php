<?php

namespace Source;

use Source\Orcamento\EmAprovacao;
use Source\Orcamento\Status;

Class Orcamento
{
  public int $quantidadeItens;
  public float $valor;
  public Status $status;

  public function __construct() {
    $this->status = new EmAprovacao();
  }

  public function aplicaDescontoExtra(): void {
    $this->valor -= $this->status->calculaDescontoExtra($this);
  }

  public function aprova(): void {
    $this->status->aprova($this);
  }

  public function finaliza(): void {
    $this->status->finaliza($this);
  }
}