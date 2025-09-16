<div class="container">
    <h2 class="heading">Question Deatails</h2>
    <div class="col-8">
        <?php
        include('./common/db.php');

        $query = "SELECT * FROM `questions` WHERE id = '$qid'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();

        // print_r($row);
        echo "<h4 class='margin-bottom-15 question-title'> Question : "
            . $row['title'] . "
          </h4>
         <p class='margin-bottom-15'> Description : " . $row['description'] . "</p>
    ";

        ?>
        <form action="./server/requests.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $qid ?>">
            <textarea
                name="answer"
                class="form-control margin-bottom-15" placeholder="Type your answer..."></textarea>
            <button class="btn btn-dark margin-bottom-15">Write Answer</button>
        </form>
    </div>
</div>