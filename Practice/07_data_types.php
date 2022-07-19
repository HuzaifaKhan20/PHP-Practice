<?php

/*
*) php data types:-
1) String E.g: Xain Khan
2) Integer E.g: 12345
3) Float E.g: 12345.12
4) Boolean E.g True or False
5) Object 
6) Array
7) NULL
*/

// var_dump tells the data type of any variable 

$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";


// Object - Instances of classes 
// Employee is a class ---> Xain Khan can be one object 

// Array - Used to store multiple values in a single variable
$friends = array("xk","uk","kx","kuk");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

// NULL
$myName = NULL;
echo var_dump($myName);


?>