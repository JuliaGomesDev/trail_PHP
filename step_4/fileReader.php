<?php

$curses = file_get_contents('file.txt');

echo $curses . PHP_EOL;

$curses = file('file.txt');

var_dump($curses);

?>