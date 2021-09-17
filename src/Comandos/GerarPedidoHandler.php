<?php

namespace Source\Comandos;

class GerarPedidoHandler
{
  
  public function execute(GerarPedido $gerarPedido) {
    $orcamento = new Orcamento();
    $orcamento->quantidadeItens = $gerarPedido->getQuantidadeItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    $pedido->dataFinal = new \DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;

    echo "O pedido será criado no banco de dados " . PHP_EOL;
    echo "O email será enviado para o cliente " . PHP_EOL;
    echo "Gerar log de criação de pedido" . PHP_EOL;
  }
}