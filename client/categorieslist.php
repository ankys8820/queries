<div class="container">
    <h2 class="heading">Categories</h2>
    <?php 
    include('./common/db.php');
      $query = "SELECT * FROM category";

    $result = $conn->query($query);

    foreach ($result as $row) {
      $name = $row['name'];
    //   $id = $row['id'];
      echo "<div class='row question-list'>
             <h4>
               <a class='question-list-questions' href='?q-id=$id'>
                 # $name
               </a>              
             </h4>
        </div>";
    }

    ?>
</div>