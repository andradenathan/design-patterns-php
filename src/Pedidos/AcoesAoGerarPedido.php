<?php

namespace Source\Pedidos;

use Source\Pedido;

interface AcoesAoGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}