<?php

namespace Source;

use DateTimeInterface;

Class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinal;
  public Orcamento $orcamento;
}