<?php

$stu1 = "Xain Khan";

$stu1_Marks = [67,98,89,90,85];

$sum_Marks = 0;

foreach ($stu1_Marks as $value) {
    $sum_Marks += $value;
}

$stu1_Percentage = ($sum_Marks*100)/500;


echo "Student Name : " . $stu1 . "<br><br>";

echo "Marks Gained : " . $sum_Marks . " out of 500 <br><br>";

echo "Percentage : " . $stu1_Percentage . "%<br><br>";

if ($stu1_Percentage >= 90) {
    echo "Grade : A+";
}
elseif ($stu1_Percentage >= 80 && $stu1_Percentage < 90) {
    echo "Grade : A1";
}
elseif ($stu1_Percentage >= 70 && $stu1_Percentage < 80) {
    echo "Grade : A";
}
elseif ($stu1_Percentage >= 60 && $stu1_Percentage < 70) {
    echo "Grade : B";
}
elseif ($stu1_Percentage >= 50 && $stu1_Percentage < 60) {
    echo "Grade : C";
}
elseif ($stu1_Percentage >= 40 && $stu1_Percentage < 50) {
    echo "Grade : D";
}
else {
    echo "Grade : Fail";
}

?>