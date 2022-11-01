<?php

// include '_dbconnect.php';
require '_dbconnect.php';

/*
include and require both show error if there is error in the file.
But if the file is not found then include shows warning and run the code below
but require shows error and not run the code below it.
*/

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num =  mysqli_num_rows($result);
echo $num;
echo " records found in the database :- <br>";

while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['s.no'] . ") Hello " . $row['name'] . " Your concern " . $row['concern'] . " has been resolved ";
    echo "<br>";
}


?>