<?php

// strlen tells the length of an string 
// Dot (.) is used to concatenate strings 

$name = "Xain Khan";
echo "Name = " . $name;
echo "<br>";

echo "The length of" . " name is (strlen) " . strlen($name);
echo "<br>";
echo "Number of words in name = (str_word_count) " . str_word_count($name);
echo "<br>";
echo "The reverse name is (strrev) " . strrev($name);
echo "<br>";
echo "The position of khan in name = (strpos) " . strpos($name, "Khan");
echo "<br>";
echo "The Xain is replaced with Huzaifa in name = (str_replace) " . str_replace("Xain", "Huzaifa", $name);
echo "<br>";
echo "(str_repeat) is used to repeat any string = " . str_repeat($name, 10);
echo "<br>";
echo "<pre>";
echo rtrim("(rtrim)        XK is learning       ");
echo "<br>";
echo ltrim("        XK is learning       (ltrim)");
echo "</pre>";



?>