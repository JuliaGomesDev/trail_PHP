<?php

namespace Alura\Post\Model;

class Editor {

  private string $archive;
  
  public function __construct(string $archive)
  {
    $this->archive = $archive;
  }
}

?>