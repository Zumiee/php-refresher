<?php

echo "Bomb countdown: \n";

for ($i=10; $i>0; $i--) {
    echo $i . "...";
    if (1 == $i) {
        echo "Sabog! boogshh! \n";
    }
    sleep(1);
}