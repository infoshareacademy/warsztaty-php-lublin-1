<?php

$array = [1, 2, 3];
var_dump($array[1]);


$array = array(
  "foo" => "bar",
  "bar" => "foo",
);

var_dump($array);

// as of PHP 5.4
$array = [
  "foo" => "bar",
  "bar" => "foo",
];

var_dump($array['bar']);
unset($array['bar']);
var_dump($array['bar']);

$array = array(
  "foo" => "bar",
  42    => 24,
  "multi" => array(
       "dimensional" => array(
           "array" => "foo"
       )
  )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
