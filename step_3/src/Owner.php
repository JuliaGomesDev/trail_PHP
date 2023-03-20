<?php

class Owner extends Person {

  private Address $address;

  public function __construct(string $name, Cpf $cpf, Address $address) {

    parent::__construct($name, $cpf);
    $this->address = $address;
  }

  public function getName() : string 
  {
     return $this->name;
  }
  
  public function returnCPF() : string 
  {
    return $this->cpf->getCPF();
  }
}

?>