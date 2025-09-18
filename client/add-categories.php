<!-- <div class="container">
    <h1 class="heading">Add Category</h1>
    <?php ?>
</div> -->

<div class="container">
    <div class="offset-sm-1">
        <h2 class="heading">Add Categories  </h3>

           <form action="./server/requests.php" method="post">
              <div class=" col-6 offset-sm-3 margin-bottom-15">
             <label for="title" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" required name="cat_name" placeholder="enter category">
            </div>
              <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                 <button type="submit" name="cat" class="btn btn-dark">Add Category</button>
              </div>
           </form>

           <div>
                <h3>Categories</h3>
                <table class="table table-dark table-striped">
                   <thead>
                        <tr>
                            <th scope="col">Id no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>                            
                         </tr>
                    </thead>
                    <tbody>
                          <?php
                             include("./common/db.php");
                             $query = "SELECT * FROM category";
                             $result = $conn->query($query);
                             foreach ($result as $row) {
                             $name = $row['name'];
                             $id = $row['id'];
                             $key = array_keys($row);
                             
                             echo "                          
                              <tr>
                               <th scope='row'>$id</th>
                               <td>$name</td>
                               <td><a href='#' class='btn btn-danger'>
                               <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                              <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                            </svg>
                          </a></td>                        
                        </tr>
   
                         </tbody>
                             ";
                       }

                 ?>
                </table>

           </div>

        
    </div>
</div>