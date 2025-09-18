<div class="container">
 

<div class="row">
  <div class="col-8">
     <h2 class="heading">Questions</h2>

    <?php
    include("./common/db.php");
    $query = "SELECT * FROM questions";

    $result = $conn->query($query);

    foreach ($result as $row) {
      $title = $row['title'];
      $id = $row['id'];
      $category_id = $row['category_id'];

           $sql = "SELECT * FROM `category` WHERE `id`='$category_id'";

            $res = $conn->query($sql);
            $category = $res->fetch_assoc();
            $cat_name = $category['name'];

      echo "<div class='row question-list'>
             <h4>
               <a class='question-list-questions lead fs-2 ' href='?q-id=$id'>
                  $title
               </a>    
               <span class='d-flex justify-content-end text-info'># $cat_name</span>          
             </h4>
        </div>";
    }
    ?>
  </div>
  <div class="col-4">
    <?php 
    include('categorieslist.php');
    ?>
  </div>
  </div>
</div>