<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // username is root for localhost
define('DB_PASSWORD', ''); // password is blank for localhost
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}

?>