<?php

echo "Welcome to php Functions <br>";

function studentMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$stu1 = [94,85,60,70,80,90];
// $stu1Marks = studentMarks($stu1);
$stu1Marks = avgMarks($stu1);

$stu2 = [12,13,40,93,84,79];
// $stu2Marks = studentMarks($stu2);
$stu2Marks = avgMarks($stu2);

echo "Total marks scored by Student 1 out of 600 is $stu1Marks <br>";
echo "Total marks scored by Student 2 out of 600 is $stu2Marks <br>";

?>