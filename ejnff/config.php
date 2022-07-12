<?php


// Database configuration
$dbHost     = "localhost";
$dbUsername = "wwwjnff_jnff";
$dbPassword = "hf+TPq8T2RJh";
$dbName     = "wwwjnff_jnff";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>


<!--$conn=mysqli_connect("localhost","wwwjnff_jnff","hf+TPq8T2RJh","wwwjnff_jnff");-->
