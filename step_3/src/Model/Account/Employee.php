<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\{Person, Cpf};

class Employee extends Person {
  private string $position;
  private float $salary;
  public function __construct(string $name, Cpf $cpf, string $position, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->position = $position;
    $this->salary = $salary;
  }
  public function getPosition() : string 
  {
    return $this->position;
  } 

  public function getSalary() : float 
  {
    return $this->salary;
  }

  public function calculateBonus() : float 
  {
    return $this->salary * 0.1;
  }
}

?>
