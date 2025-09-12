<?php ?>

<div class="container">
    <h1 class="heading margin-bottom-15">Ask A Question</h1>

    <form action="./server/requests.php" method="post">

        <div class=" col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="enter question">
        </div>

        <div class=" col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="enter Description">
            </textarea>
        </div>
        <div class=" col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <?php include("category.php") ?>
        </div>


        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="ask" class="btn btn-dark">Ask Question</button>
        </div>
    </form>

</div>