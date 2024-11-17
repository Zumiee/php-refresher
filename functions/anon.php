<?php

$greet = function ($name) {
    return "Hello, $name\n";
};

echo $greet("Jaycee");

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Bye";
# variable outside anonymous functions can't be altered unless you add '&' sign before the variable
$greet2 = function ($name) use (&$message) {
    $message = $message . "!";
    return "$message, $name\n";
};
echo $greet2("Jaycee");
echo $message . "\n";
