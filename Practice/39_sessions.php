<?php
// What is session?
// Used to manage information across different pages

// Assume that we verified the user login info
session_start();
$_SESSION['username'] = "XK";
$_SESSION['favCat'] = "Book";
echo "We have saved your session";




?>