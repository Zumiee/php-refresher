<?php

$size = "M";

switch($size) {
    case "S":
        echo"Small Size\n";
        break;
    case "M":
        echo"Medium Size\n";
        break;
    case "L":
        echo"Large Size\n";
        break;
    case "XL":
        echo"Extra Large Size\n";
        break;
    default:
        echo "Unknown size\n";
}

