<?php
include "../include/connect.php";
    if(isset($_GET['delete_blog'])){
        $delete_blog_id = $_GET['delete_blog'];
        $delete_blog = "DELETE FROM blogs WHERE blog_id = '$delete_blog_id'";
        $delete_blog_result = mysqli_query($con, $delete_blog);
        if($delete_blog_result){
            echo "<script>window.open('index.php?add_blog', '_self')</script>";
        }else{
            echo "<script>alert('Blog Not Deleted')</script>";
        }
    }