<?php
// for all the requests

include("../common/db.php");

// print_r($_POST);

// for signup
if (isset($_POST['signup'])) {
     $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $user = $conn->prepare("INSERT INTO `users`
    (`username`,`email`,`address`,`password`) VALUES
    ('$username','$email','$address',$password)    
    ");
    $result = $user->execute();

    // 
    if($result){
        echo "User added successfully!";
        $_SESSION['user'] = ["username"=>$username, "email"=>$email]; 
        header('location : /queries');
    }else{
        echo "some error occured!!";
    }
}
