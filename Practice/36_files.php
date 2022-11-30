<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

// *)fgets read a file line by line (Print 1 line with 1 command)

//reading a file line by line
// while($a = fgets($fptr)){
//     echo $a;
// }

// echo "End of the file has been reached";

// *)fgetc read a file character by character

//reading a file character by character
// while($a = fgetc($fptr)){
//     echo $a;
//     break;
// }

// echo "End of the file has been reached";

// Write a program which reads the content of a file until . has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>