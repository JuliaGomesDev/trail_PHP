<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Employee\Employee;

class Developer extends Employee {

  public function calculateBonus() : float 
  {
    return $this->getSalary() * 0.5;
  }

  public function upLevel() 
  {
    $this->incriseSalary($this->getSalary() * 0.75);
  }
}

?>