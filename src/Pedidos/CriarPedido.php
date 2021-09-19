<?php

namespace Source\Pedidos;

use Source\Pedido;
use Source\Orcamento;

class CriarPedido implements AcoesAoGerarPedido
{ 
  public function executaAcao(Pedido $pedido): void {
    echo "Pedido salvo no banco de dados com sucesso!" . PHP_EOL;
  }
}