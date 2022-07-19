<?php

// Date Format php website 

echo "Welcome to the world of dates <br>";
$d = date("dS F Y");
echo "Todays date is $d <br>";

$d1 = date("F j, Y, g:i a"); 
echo "Todays date is $d1 <br>";

$d2 = date('\i\t \i\s \t\h\e jS \d\a\y.');
echo "Todays date is $d2 <br>";

$d3 = date("Y-m-d H:i:s");
echo "Todays date is $d3 <br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

?>