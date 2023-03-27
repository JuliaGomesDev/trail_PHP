<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticable;
use Alura\Bank\Model\Employee\Employee;

class Manager extends Employee implements Authenticable {

  public function calculateBonus() : float 
  {
    return $this->getSalary();
  }

  public function auth(string $password) : bool 
  {
    return $password === '4321';
  }
}

?>