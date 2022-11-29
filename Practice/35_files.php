<?php

$fptr = fopen("myfile.txt", "r"); 
//$fptr = file pointer
// fopen is used to open any file, r is the read pemission
// There are more permissions on PHP website

// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file. Please enter a valid filename");
}
//filesize retun the total number of characters in a file
$content = fread($fptr, filesize("myfile.txt"));
//fread is used to read the content in any file.

fclose($fptr); 
// fclose Used to minimize sever resources used by file

echo $content;
?>