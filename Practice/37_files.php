<?php

//Writing to a file
// echo "Welcome to write files in PHP";
//w = write
// $fptr = fopen("myfile2.txt", "w"); // it will create myfile2.txt if not created earlier OR erase the content if the file is already created
// fwrite($fptr, "This content has been added to the myfile2.txt\n");
// fwrite($fptr, "This is another content added to the myfile2.txt\n");
// fwrite($fptr, "This is 3rd content added to the myfile2.txt\n");
// fclose($fptr);

//Appending to a file in PHP
echo "Welcome to appending files in PHP";
//a = append
$fptr = fopen("myfile2.txt", "a"); // it will add the content in the end of file and not erase the previous data
fwrite($fptr, "This is the content appended to the myfile2.txt\n");  
fclose($fptr);

?>