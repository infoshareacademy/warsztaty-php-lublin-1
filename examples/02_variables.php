<?php

$a = 5;
$b = 'a6';
$a = 10;
// $a = 'Ala';

// echo $a + $b;

$text = 'Ala ma ' . $a . ' kotów';
echo $text . "\n";

$text = 'Ala ma $a kotów';
echo $text . "\n";

$text = "Ala ma $a kotów";
echo $text . "\n";

$text = "Ala ma {$a} kotów";
echo $text . "\n";

?>
<h1>Hello</h1>

<?php
  echo 'Hello from PHP!';
?>
