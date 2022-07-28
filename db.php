<?php

// MYSQL CONNECTION

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "users";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_errno()) {
        echo "Failed to connect!";
        exit();
}