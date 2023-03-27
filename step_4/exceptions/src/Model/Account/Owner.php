<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\{Person, Address, Cpf};

class Owner extends Person {

  private Address $address;

  public function __construct(string $name, Cpf $cpf, Address $address) {

    parent::__construct($name, $cpf);
    $this->address = $address;
  }
}

?>