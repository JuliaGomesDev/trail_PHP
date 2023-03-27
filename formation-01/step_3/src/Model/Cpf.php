<?php

namespace Alura\Bank\Model;

class Cpf {

  private string $cpf;
  function __construct(string $cpf) 
  {
    $this->cpf = $this->validateCPF($cpf);

  }

  public function getCPF(): bool|string
  {
    return $this->cpf;
  }

  private function validateCPF(string $cpf) : bool|string 
  {
    if($cpf == '') {
      return false;
    }

    return $cpf;
  }
}

?>