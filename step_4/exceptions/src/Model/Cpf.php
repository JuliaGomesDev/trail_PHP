<?php

namespace Alura\Bank\Model;

use InvalidArgumentException;

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

  private function validateCPF(string $cpf) : string 
  {
    $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
      ]);

    if($cpf === false) {
      throw new InvalidArgumentException('Cpf inválido');
    }

    return $cpf;
    
  }
}

?>