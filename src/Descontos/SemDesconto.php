<?php

namespace Source\Descontos;

use Source\Orcamento;

Class SemDesconto extends Desconto 
{

    public function __construct() {
      parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float {
      return 0;
    }
}