<?php

echo "Welcome to local/global scope of PHP <br>";

$a = 98; //Global Variable
$b = 9;

function printValue(){
    // $a = 97; $b = 100; //Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br> The value of your variable a is $a and b is $b";
}

printValue();
echo "<br> The value of your variable a is $a and b is $b";
echo "<br>";


// echo var_dump($GLOBALS); Prints all global variables
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>