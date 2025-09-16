<div class="container">
  <h2 class="heading">Questions</h2>

  <div class="col-8">

    <?php
    include("./common/db.php");
    $query = "SELECT * FROM questions";

    $result = $conn->query($query);

    foreach ($result as $row) {
      $title = $row['title'];
      $id = $row['id'];
      echo "<div class='row question-list'>
             <h4>
               <a class='question-list-questions' href='?q-id=$id'>
                  $title
               </a>              
             </h4>
        </div>";
    }
    ?>
  </div>
</div>