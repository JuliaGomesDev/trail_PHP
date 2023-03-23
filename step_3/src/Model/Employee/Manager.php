<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Employee\Employee;

class Manager extends Employee {

  public function calculateBonus() : float 
  {
    return $this->getSalary();
  }
}

?>