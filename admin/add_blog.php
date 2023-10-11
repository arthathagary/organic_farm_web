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
        move_uploaded_file($blog_image_tmp, "./blog_images/$blog_image");
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



<main class="blog-section container">

<form class="wrapper" action="" method="post" enctype="multipart/form-data">
	<div class="registration_form">
		<div class="title">
        Add Blogs
		</div>

		
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="blog_title">Blog Title</label>
					<input type="text" id="blog_title" name="blog_title" required autocomplete="off">
				</div>
				<div class="input_wrap">
					<label for="blog_content">Blog Content</label>
					<input type="text" id="blog_content" name="blog_content" required autocomplete="off">
				</div>
                <div class="input_wrap">
					<label for="blog_image">Blog Image</label>
					<input type="file" id="blog_image" name="blog_image" required autocomplete="off">
				</div>
                <div class="input_wrap">
					<label for="blog_date">Blog Date</label>
					<input type="date" id="blog_date" name="blog_date" required autocomplete="off">
				</div>
                
                <div class="input_wrap">
					<label for="who_post">Who Post</label>
					<input type="text" id="who_post" name="who_post" required autocomplete="off">
				</div>
                
				<div class="input_wrap">
					<input type="submit" value="Add Blog" class="submit_btn" name="add_blog">
				</div>
			</div>
		
	</div>
</form>

<table class="table table-bordered blog-table">
    <thead>
        <tr>
           
            <th>Blog Title</th>
            <th>Blog Content</th>
            <th>Blog Image</th>
            <th>Blog Date</th>
            <th>Who Post</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $select_query = "SELECT * FROM blogs";
            $result_query = mysqli_query($con, $select_query);
            while($row = mysqli_fetch_assoc($result_query)){
                $blog_id = $row['blog_id'];
                $blog_title = $row['blog_title'];
                $blog_content = $row['blog_content'];
                $blog_image = $row['blog_image'];
                $blog_date = $row['blog_date'];
                $who_post = $row['who_post'];
                echo "<tr>";
                echo "<td>{$blog_title}</td>";
                echo "<td>{$blog_content}</td>";
                echo "<td><img src='./blog_images/{$blog_image}' width='100px' height='100px'></td>";
                echo "<td>{$blog_date}</td>";
                echo "<td>{$who_post}</td>";
                echo "<td><a href='delete_blog.php?delete_blog={$blog_id}'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

</table>
</main>


