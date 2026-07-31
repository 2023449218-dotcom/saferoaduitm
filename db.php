<?php

/* Database server configuration */

$host = "localhost"; // Database server
$user = "root";  // MySQL username
$password = ""; // MySQL password
$database = "saferoaduitm";  // Database name



/* Create database connection */

$conn = new mysqli($host, $user, $password, $database);



/* Check whether the connection is successful */

if($conn->connect_error){

    die("Database Connection Failed: " . $conn->connect_error);
}



/* Set character encoding to UTF-8 */

$conn->set_charset("utf8");

?>
