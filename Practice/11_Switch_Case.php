<?php

// break is used (in vs code only to) stop case otherwise all the case statement runs 

$age = 48;

switch($age){
    case 12:
        echo "You are $age years old <br>";
        break;

    case 48:
        echo "You are $age years old <br>";
        break;

    case 56:
        echo "You are $age years old boy <br>";
        break;

    default:
        echo "Your age is weird <br>";
        break;
}


?>