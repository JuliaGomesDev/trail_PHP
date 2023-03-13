<?php 

$text = 'Texto com palavrões: estupefato e carambolas';

var_dump($text);

echo 'Texto censurado:' . str_replace(
  ['estupefato',  'carambolas', 'Texto com palavrões:'],
  ['est*#%', 'c@ram&!'],
  $text
) . PHP_EOL;

// other forms of replace a text

echo 'Texto censurado: ' . ltrim(strtr($text, [
  'estupefato' => 'est*#%', 
  'carambolas' => 'c@ram&!', 
  'Texto com palavrões:' => '',
]), ' ') . PHP_EOL;

echo 'Substituição com strtr(): ' . strtr('hello I\'am saiding hi', 
[
  'hello' => 'hi', 
  'hi' => 'hello'
]) . PHP_EOL;

// replace in all occurrences

echo 'Substituição com str_replace(): ' . 
      str_replace(['hello', 'hi'], ['hi', 'hello'], 'hello I\'am saiding hi');
?>