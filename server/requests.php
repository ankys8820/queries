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

    // echo $user->insert_id;
    // 
    if ($result) {
        echo "User added successfully!";
        // $_SESSION['user'] = ["username" => $username, "email" => $email,"user_id"=>$user->insert_id];
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
    $user_id = 0;

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            // print_r($row);
            $username = $row['username'];
            $user_id = $row['id'];
        }
        // echo $username;
        $_SESSION['user'] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        header('location: /queries/index.php');
    } else {
        echo "some error occured!!";
    }
}
// for signout
elseif (isset($_GET['logout'])) {
    // 
    session_unset();
    // 
    session_destroy();
    // 
    header("location: /queries");
}
// for Ask Question
elseif (isset($_POST['ask'])) {
    // print_r($_POST);
    // print_r($_SESSION);

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];



    $question = $conn->prepare("INSERT INTO `questions`(`title`,`description`,`category_id`,`user_id`) VALUES ('$title','$description','$category_id','$user_id')");





    $result = $question->execute();


    $question->insert_id;

    if ($result) {
        header("location: /queries");
    } else {
        // echo "Some error occured in adding question";
        echo $conn;

        die(mysqli_error($conn));
    }
}
