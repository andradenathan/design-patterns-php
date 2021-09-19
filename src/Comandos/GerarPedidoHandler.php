<?php

namespace Source\Comandos;

use Source\Orcamento;
use Source\Pedido;
use Source\Pedidos\AcoesAoGerarPedido;
use Source\Pedidos\CriarPedido;
use Source\Pedidos\EnviarPedido;
use Source\Pedidos\GerarLogPedido;

class GerarPedidoHandler
{
  private array $acoesGerarPedido = [];

  public function novaAcaoAoGerarPedido(AcoesAoGerarPedido $acao) {
    $this->acoesGerarPedido[] = $acao;
  }

  public function execute(GerarPedido $gerarPedido) {
    $orcamento = new Orcamento();
    $orcamento->quantidadeItens = $gerarPedido->getQuantidadeItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    $pedido->dataFinal = new \DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;

    foreach($this->acoesGerarPedido as $acoes) {
      $acoes->executaAcao($pedido);
    }
  }
}