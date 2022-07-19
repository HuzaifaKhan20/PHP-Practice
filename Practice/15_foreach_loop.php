<?php

echo "Welcome to foreach loops <br>";
$arr = array("HP", "DELL", "Acer", "A4Tech");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this = foreach loops 

// Numeric or Index Array because it keys are numbers
foreach ($arr as $value) {
    echo "$value <br>";
}

?>