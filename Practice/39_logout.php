<?php

// Start the session and get the data
session_start(); // it will start the session
session_unset(); // it will unset all the data
session_abort(); // it will end the session

echo "We have been logged out";


?>