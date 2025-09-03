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
    if (isset($_GET['signup'])) {
        include('client/signup.php');
    } elseif (isset($_GET['signin'])) {
        include('client/signin.php');
    }


    ?>





</body>

</html>