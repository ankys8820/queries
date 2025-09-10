<?php

session_start();

// error_reporting(e_all);
// to fix the wannings on Windows.
ini_set('display_errors', 0);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries Project</title>

    <!-- add bootstrap -->
    <?php include('client/commonFiles.php'); ?>
</head>

<body>
    <?php
    include('client/headers.php');

    // routing mannualy
    if (isset($_GET['signup']) && !$_SESSION['user']['username']) {
        include('client/signup.php');
    } elseif (isset($_GET['signin']) && !$_SESSION['user']['username']) {
        include('client/signin.php');
    }

    // echo  $_SESSION['user']['username'];


    ?>





</body>

</html>