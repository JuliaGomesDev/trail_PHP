<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Employee\Employee;

class Director extends Employee {

  public function calculateBonus() : float 
  {
    return $this->getSalary() * 2;
  }

  public function auth(string $password) : bool
  {
    return $password = '1234';
  }
}

?>