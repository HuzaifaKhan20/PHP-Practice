<?php
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else {
    echo "Connection was successful <br>";
}

// Variables to be inserted into the table
$name = "UK";
$destination = "USA";

// SQL query to be executed
$sql = "INSERT INTO `contactus` (`name`, `concern`) VALUES ('$name', '$destination');";
$result = mysqli_query($conn, $sql);


//Add a new learning_table to the learning_table table in the database
if ($result){
    echo "The record has been inserted successfully!";
}
else {
    echo "The record was not inserted successfully because of this error --->" . mysqli_error($conn);
}

?>