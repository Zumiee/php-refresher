<?php

#local function variables are destroyed after running the function 

# global and local variable
$superhero = "Tanggol";

function revealIdentity() {
    global $superhero;
    $message = "'s real name is Coco Martin\n";
    echo "$superhero$message";
}

revealIdentity();


function countVisitors() {
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived\n";
}

countVisitors();
countVisitors();
countVisitors();
