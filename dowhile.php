<?php

do {
    $rollDice = rand(1,6);
    echo "You rolled a $rollDice\n";
    if(6 == $rollDice) {
        echo "Congrats! You hit the jackpot!\n";
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));

} while ('y' == $rollAgain);