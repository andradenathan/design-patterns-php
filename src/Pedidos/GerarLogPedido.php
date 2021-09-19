<?php

namespace Source\Pedidos;

use Source\Pedido;

class GerarLogPedido implements AcoesAoGerarPedido
{
  public function executaAcao(Pedido $pedido): void {
    echo "Log de pedido gerado com sucesso!" . PHP_EOL;
  }
}