<?php

namespace Source\Descontos;

use Source\Orcamento;

Class Itens extends Desconto
{
  public function calculaDesconto(Orcamento $orcamento): float {
    if($orcamento->quantidadeItens > 5) {
      return $orcamento->valor * 0.1;
    }
    return $this->proximoDesconto->calculaDesconto($orcamento);
  }
}