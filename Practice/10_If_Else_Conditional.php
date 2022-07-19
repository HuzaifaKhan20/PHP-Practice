<?php

// $a = 645;
// $b = 5;

// if($a > 78){
//     echo "a is greater than 78";
// }
// else {
//     echo "a is not greater than 78";
// }

// $age = 17;

// if ($age > 18){
//     echo "You have to make new NIC";
// }
// elseif ($age > 15){
//     echo "You don't need NIC";
// }
// else {
//     echo "You have to renew NIC";
// }

$age = 18;

if ($age >= 18 && $age < 65){
    echo "You are eligible for driving license";
}
elseif ($age < 18 && $age > 65){
    echo "You age is less than 18 so you are not eligible for driving license";
}
else {
    echo "You are not eligible for driving license";
}


?>