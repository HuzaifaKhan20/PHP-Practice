<?php

echo "Welcome to multi dimensional arrays in php <br>";

// 2 dimensional array 

$multiDimArray = [
    [1,5,7,9],
    [1,2,3,1],
    [4,5,0,1],
];


// 3 dimensional array 

$multiDimArray1 = [
    [
        [1,5,7,9],[1,5,7,9],[1,5,7,9],
    ],
    [
        [4,5,0,1],[4,5,0,1],[4,5,0,1],
    ],
    [
        [9,5,1,6],[9,5,1,6],[9,5,1,6],
    ],
];


// echo $multiDimArray[0][2];

// var_dump($multiDimArray);

// for ($i=0; $i < count($multiDimArray); $i++) {
//     echo var_dump($multiDimArray[$i]);
//     echo "<br>";
// }


// 2 dimensional array 

// for ($i=0; $i < count($multiDimArray); $i++) {
//     for ($j=0; $j < count($multiDimArray[$i]); $j++) {
//         echo $multiDimArray[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }


// 3 dimensional array 

for ($i=0; $i < count($multiDimArray1); $i++) {
    for ($j=0; $j < count($multiDimArray1[$i]); $j++) {
        for ($k=0; $k < count($multiDimArray1[$i][$j]); $k++) {
            echo $multiDimArray1[$i][$j][$k];
            echo " ";
        }
    }
    echo "<br>";
}

?>