<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Person;
use Alura\Bank\Model\Cpf;

class Employee extends Person {
  private string $position;

  public function __construct(string $name, Cpf $cpf, string $position)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
  }
  public function getPosition() : string 
  {
    return $this->position;
  }
}

?>
