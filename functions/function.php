<?php

function greet($name) {
    return "Hello, $name";
}

echo greet("Jc\n");


function greetWithTime($name, $time = "day") {
    return "Good $time, $name\n";
}

echo greetWithTime("Jaycee");
echo greetWithTime("Nicee", "evening");
