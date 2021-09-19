<?php

namespace Source\Pedidos;

use Source\Pedido;

class EnviarPedido implements AcoesAoGerarPedido
{
  public function executaAcao(Pedido $pedido): void {
    echo "E-mail enviado para o cliente {$pedido->nomeCliente}." . PHP_EOL;
  }
}