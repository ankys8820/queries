<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <img src="./public/logo.png" class="" width="50px" alt="querie"></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="./">Home</a>
                <!-- If user and username is available in session. -->
                <?php if (!$_SESSION['user']['username']) { ?>
                    <a class="nav-link" href="?signin=true">Login</a>
                    <a class="nav-link" href="?signup=true">Signup</a>

                <?php } ?>



                <?php if ($_SESSION['user']['username']) { ?>
                    <a class="nav-link" href="?signup=true">Logout</a>

                <?php } ?>


                <a class="nav-link" href="#">Category</a>
                <a class="nav-link" href="#">Latest Queries</a>

            </div>
        </div>
    </div>
</nav>