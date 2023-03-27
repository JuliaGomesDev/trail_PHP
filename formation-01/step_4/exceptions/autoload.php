<?php

spl_autoload_register(function(string $class){

  $path = str_replace('Alura\\Bank\\', 'formation-01/step_4/exceptions/src/', $class);
  $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
  $path .= '.php';

  if (file_exists($path)) {
    require_once $path;   
  }
});

?>