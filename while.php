<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Correct! You've unlocked my shiz\n";
        break;
    } elseif ($attempts == $maxAttempts) {
        echo "Don't attempt further boke!\n";
    } else {
        echo "Wrong! Try again. Attempts left: " . ($maxAttempts - $attempts) . "\n";
    }
}
