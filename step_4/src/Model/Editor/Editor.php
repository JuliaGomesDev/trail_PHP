<?php

namespace Alura\Post\Model\Editor;

class Editor {

  private string $archive;
  
  public function __construct(string $archive)
  {
    $this->archive = $archive;
  }

  public function getArchive() : string
  {
    return file_get_contents($this->archive);
  }

}
?>