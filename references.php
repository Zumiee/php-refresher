<?php

$person = "Jaycee";
$client = &$person;

var_dump($person, $client);

$client = "Pogi";

var_dump($person, $client);

$person = "Gwapo";

var_dump($person, $client);