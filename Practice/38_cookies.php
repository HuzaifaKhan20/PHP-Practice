<?php

echo "Welcome to the world of cookies <br>";

// Cookies are used to know the preferences of a user based on his previous seacrh/clicks
// Cookies are used to store less sensitive data (i.e Category name)

// Syntax to set a cookie 
// echo time(); //it will print seconds from jan 1970
setcookie("category", "Books", time() + 86400, "/");
// 1 day = 86400 seconds
// "/" = use cookies on whole website
setcookie("name", "Xain Khan", time() + 86400, "/");
echo "The cookie is set <br>";

?>