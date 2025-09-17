<div class="container">
    <div class="offset-sm-1">
        <h5>Answers : </h5>

        <?php
        $query = "SELECT * FROM `answers` WHERE `question_id`='$qid'";

        $result = $conn->query($query);

        foreach ($result as $row) {
            $answer = $row['answers'];
            $user_id = $row['user_id'];

            $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

            $res = $conn->query($sql);
            $user = $res->fetch_assoc();
            $username = $user['username'];




            echo "<div class='row'>
            <p class='lead p-3 '>$answer</p>
            <span class='d-flex justify-content-end text-info'># $username</span>
        </div>";
        }

        ?>
    </div>
</div>