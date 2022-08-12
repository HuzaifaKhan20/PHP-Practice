<?php
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else {
    echo "Connection was successful <br>";
}


//Creating a db
$sql = "CREATE DATABASE dbPHP4";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!";
}
else {
    echo "The db was not created successfully because of this error ---> " . mysqli_error($conn);
}


?>