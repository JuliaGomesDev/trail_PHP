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
   $content = fopen($this->archive, 'r');
   return fread($content, filesize($this->archive)); 
  }

}

$obj1 = new Editor('file.txt');

echo $obj1->getArchive();

?>