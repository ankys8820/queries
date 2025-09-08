<div class="container">
    <h1 class="heading margin-bottom-15">Signin</h1>

    <form action="./server/requests.php" method="post">

        <div class=" col-6 offset-sm-3 margin-bottom-15">
            <!-- <label for="username" class="form-label">Username</label> -->
            <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
        </div>

        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="signin" class="btn btn-dark">Signin</button>
        </div>
    </form>

</div>