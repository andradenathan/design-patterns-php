<?php

require_once 'vendor/autoload.php';

use Source\Comandos\GerarPedido;
use Source\Comandos\GerarPedidoHandler;
use Source\Pedidos\CriarPedido;
use Source\Pedidos\EnviarPedido;
use Source\Pedidos\GerarLogPedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2]; 
$cliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $cliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->novaAcaoAoGerarPedido(new CriarPedido());
$gerarPedidoHandler->novaAcaoAoGerarPedido(new EnviarPedido());
$gerarPedidoHandler->novaAcaoAoGerarPedido(new GerarLogPedido());
$gerarPedidoHandler->execute($gerarPedido);