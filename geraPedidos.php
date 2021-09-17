<?php

require_once 'vendor/autoload.php';

use Source\Comandos\GerarPedido;
use Source\Comandos\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2]; 
$cliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $cliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);