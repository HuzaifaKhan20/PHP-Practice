<?php

// Operators in PHP : -
// 1) Arithmetic Operators
// 2) Assignment Operators
// 3) Comparison Operators
// 4) Logical Operators

$a = 45;
$b = 5;

// 1) Arithmetic Operators
echo "1) Arithmetic Operators" . "<br>";
echo "For a + b, the result is " . ($a + $b) . "<br>";  //Brackets are used to convert numeric value into string
echo "For a - b, the result is " . ($a - $b) . "<br>"; 
echo "For a * b, the result is " . ($a * $b) . "<br>"; 
echo "For a / b, the result is " . ($a / $b) . "<br>"; 
echo "For a % b, the result is " . ($a % $b) . "<br>"; 
echo "For a ** b, the result is " . ($a ** $b) . "<br><br>";

// 2) Assignment Operators
echo "2) Assignment Operators" . "<br>";
$x = $a;
echo "For x, the value is " . $x . "<br>";

$a += 6;
echo "For a, the value is " . $a . "<br>";

$a -= 6;
echo "For a, the value is " . $a . "<br>";

$a *= 6;
echo "For a, the value is " . $a . "<br>";

$a /= 5;
// echo "For a, the value is " . $a . "<br>";

$a %= 5;  // $a = $a % 5
echo "For a, the value is " . $a . "<br><br>";


// 3) Comparison Operators
echo "3) Comparison Operators" . "<br>";
$c = 78;
$d = 7;

echo "For c == d, the result is " ;
echo var_dump($c == $d);
echo "<br>";

echo "For c > d, the result is " ;
echo var_dump($c > $d);
echo "<br>";

echo "For c < d, the result is " ;
echo var_dump($c > $d);
echo "<br>";

echo "For c <= d, the result is " ;
echo var_dump($c <= $d);
echo "<br>";

echo "For c >= d, the result is " ;
echo var_dump($c >= $d);
echo "<br>";

// <> = not equal to 
echo "For c <> d, the result is " ;
echo var_dump($c <> $d);
echo "<br><br>";


// 4) Logical Operators
echo "4) Logical Operators" . "<br>";
$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

// ! is used to reverse the condition 
echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";




?>