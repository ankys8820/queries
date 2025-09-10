<?php

session_start();
// for all the requests

include("../common/db.php");

// print_r($_POST);

// for signup
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = sha1($_POST['password']);

    $user = $conn->prepare("INSERT INTO `users`
    (`username`,`email`,`address`,`password`) VALUES
    ('$username','$email','$address','$password')    
    ");
    $result = $user->execute();

    // 
    if ($result) {
        echo "User added successfully!";
        $_SESSION['user'] = ["username" => $username, "email" => $email];
        header('location: /queries/index.php');
    } else {
        echo "some error occured!!";
    }
}
// for sign in
elseif (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $username = "";

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            // print_r($row);
            $username = $row['username'];
        }
        // echo $username;
        $_SESSION['user'] = ["username" => $username, "email" => $email];
        header('location: /queries/index.php');
    } else {
        echo "some error occured!!";
    }
}
// for signuot
elseif (isset($_GET['logout'])) {
    // 
    session_unset();
    // 
    session_destroy();
    // 
    header("location: /queries");
}
