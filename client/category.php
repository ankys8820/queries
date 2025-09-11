<select name="category" id="category" class="form-control">
    <option value="">Select a Category</option>
    <!-- <option value="">Mobile</option>
    <option value="">Coding</option>
    <option value="">General</option> -->
    <?php
    include("./common/db.php");

    $query = "SELECT * FROM category";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $name = $row['name'];
        $id = $row['id'];
        echo "<option value=$id>$name</option>";
    }

    ?>
</select>