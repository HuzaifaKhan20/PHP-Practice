<?php

echo "Welcome to associative array <br>";

$favCol = ['xk' => 'red',
            'uk' => 'green',
            'hk' => 'blue'];

// echo $favCol['x'];
// echo "<br>";
// echo $favCol['y'];
// echo "<br>";
// echo $favCol['z'];
// echo "<br>";
// echo $favCol[4];
// echo "<br>";

foreach ($favCol as $key => $value) {
    echo "<br>Favourite color of $key is $value";
}




?>