<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\{Person, Cpf};

abstract class Employee extends Person {
  private float $salary;
  public function __construct(string $name, Cpf $cpf, float $salary)
  {
    parent::__construct($name, $cpf);
    $this->salary = $salary;
  }

  public function getSalary() : float 
  {
    return $this->salary;
  }

  public function calculateBonus() : float 
  {
    return $this->salary * 0.1;
  }

  public function incriseSalary(float $valueToIncrise) : float
  {
    if($valueToIncrise < 0) {
      echo 'Aumento não pode ser negativo' . PHP_EOL;
      exit();
    }

    return $this->salary += $valueToIncrise;
  }
}

?>
