<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticable;
use Alura\Bank\Model\Employee\Employee;

class Developer extends Employee implements Authenticable {

  public function calculateBonus() : float 
  {
    return $this->getSalary() * 0.5;
  }

  public function upLevel() 
  {
    $this->incriseSalary($this->getSalary() * 0.75);
  }

  public function auth(string $password) : bool 
  {
    return $password === 'abcd';
  }
}

?>