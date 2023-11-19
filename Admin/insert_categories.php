<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];

    // Corrected SQL query
    $select_query = "SELECT * FROM categories WHERE category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0){
        echo "<script>alert('Category already exists! Please try another title.')</script>";
    } else {
        // Corrected SQL query
        $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
        $result = mysqli_query($con, $insert_query);

        if($result){
            echo "<script>alert('Category has been inserted successfully!')</script>";
        } else {
            echo "<script>alert('Error inserting category!')</script>";
        }
    }
}
?>
<h2 class="text-center"> Insert Categories </h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fas fa-receipt"></i></span>
        </div>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
    </div>
</form>
