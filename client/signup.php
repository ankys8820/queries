<div class="container">
    <h1 class="heading margin-bottom-15">Signup</h1>

    <form action="./server/requests.php" method="post">
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <!-- <label for="username" class="form-label">Username</label> -->
            <input type="text" name="username" class="form-control" id="username" placeholder="enter username">
        </div>
        <div class=" col-6 offset-sm-3 margin-bottom-15">
            <!-- <label for="username" class="form-label">Username</label> -->
            <input type="email" name="email" class="form-control" id="email" placeholder="enter email">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <input type="text" name="address" class="form-control" id="address" placeholder="enter address">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="signup" class="btn btn-dark">Signup</button>
        </div>
    </form>

</div>