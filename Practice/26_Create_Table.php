<?php
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbPHP4";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else {
    echo "Connection was successful <br>";
}

// Create a table in the db
$sql = "CREATE TABLE `php_learning_table` ( `S.NO` INT(6) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(11) NOT NULL ,  `Age` INT(6) NOT NULL 
,  `Dest` VARCHAR(11) NOT NULL ,    PRIMARY KEY  (`S.NO`))";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "The table was created successfully";
}
else {
    echo "The table was not created successfully because of this error --->" . mysqli_error($conn);
}


?>