<?php

$host = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$database = 'queries';


$conn = new mysqli($host, $dbUser, $dbPassword, $database);

if ($conn->connect_error) {
    die("Not connect with databases" . $conn->connect_error);
}

// echo "database connected";
