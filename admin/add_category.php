<?php
    include "../include/connect.php";
    if(isset($_POST['add_category'])){
        $category_name = $_POST['category_name'];
        //select all data from categories table
        $select_query = "SELECT * FROM categories where category_name='$category_name'";
        $result_select = mysqli_query($con,$select_query);
        $number_of_rows = mysqli_num_rows($result_select);
        if($number_of_rows > 0){
            echo "<script>alert('Category Already Exists')</script>";
        }elseif(empty($category_name)){
            echo "<script>alert('Please Enter Category Name')</script>";
        }else{
            $insert_query = "INSERT INTO categories(category_name) VALUES('$category_name')";
            $result_insert = mysqli_query($con,$insert_query);
                if(!$result_insert){
                    die("Query Failed: ".mysqli_error($con));
                }else{
                    echo "<script>alert('Category Added Successfully')</script>";
                }
            }
    }
?>

<form action="" method="post" class="category_form">
    <div class="form-group">
        <label for="category_name">Add Category</label>
        <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
        <input type="submit" class="btn btn-primary" name="add_category" value="Add Category">
    </div>
   
</form>