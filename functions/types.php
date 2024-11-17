<?php

#to disable type coercion --- to disable automatic data type conversion
declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5,3);