<?php
include "../include/connect.php";
if(isset($_POST['add_blog'])){
    $blog_title = $_POST['blog_title'];
    $blog_content = $_POST['blog_content']; 
    $blog_image = $_FILES['blog_image']['name'];
    $blog_image_tmp = $_FILES['blog_image']['tmp_name'];
    $blog_date = $_POST['blog_date'];
    $who_post = $_POST['who_post'];
    $blog_status = 'true';

    if(empty($blog_title) || empty($blog_content) || empty($blog_image) || empty($blog_date) || empty($who_post)){
        echo "<script>alert('Please Fill All Fields')</script>";
        exit();
    }else{
        move_uploaded_file($product_image_tmp, "blog_images/$blog_image");
        $insert_blogs = "INSERT INTO `blogs`(blog_title, blog_content, blog_image, blog_date, who_post,blog_status) VALUES('$blog_title', '$blog_content', '$blog_image', '$blog_date', '$who_post','$blog_status')";
        $blog_result = mysqli_query($con, $insert_blogs);
        if($blog_result){
            echo "<script>alert('Product Added Successfully')</script>";
        }else{
            echo "<script>alert('Product Not Added')</script>";
        }
        
    } 
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>Add Blogs</h1>
    <div class="form-group">
        <label for="">Blog Title</label>
        <input type="text" class="form-control" name="blog_title">

        <label for="">Blog Content</label>
        <input type="text" class="form-control" name="blog_content">
        
        <label for="">Blog Image</label>
        <input type="file" class="form-control" name="blog_image">

        <label for="">Blog Date</label>
        <input type="date" class="form-control" name="blog_date">

        <label for="">Who Post</label>
        <input type="text" class="form-control" name="who_post">

      
        
        

        <input type="submit" class="btn btn-primary" name="add_blog" value="Add Blog">
    </div>
    
</form>