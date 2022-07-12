<?php

//error_reporting(0);
if ($_SERVER['HTTP_HOST'] == 'localhost') {

    $conn = mysqli_connect("localhost", "root", "", "wwwjnff_jnff");
    $db =  mysqli_connect("localhost", "root", "", "wwwjnff_jnff");

} else {
    $conn = mysqli_connect("localhost", "wwwjnff_jnff", "hf+TPq8T2RJh", "wwwjnff_jnff");
    $db =  mysqli_connect("localhost", "wwwjnff_jnff", "hf+TPq8T2RJh", "wwwjnff_jnff");
}


if ($conn->connect_error) {
    die("Connection Wrong: " . $conn->connect_error);
}
