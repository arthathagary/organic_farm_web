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

<!-- <form action="" method="post" class="category_form">
    <div class="form-group">
        <label for="category_name">Add Category</label>
        <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
        <input type="submit" class="btn btn-primary" name="add_category" value="Add Category">
    </div>
   
</form> -->


<main class="container category-section">
<form class="wrapper-category" action="" method="post">
	<div class="registration_form">
		<div class="title">
        Add Category
		</div>

		
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="category_name">Enter Category Name</label>
					<input type="text" id="category_name" name="category_name" required autocomplete="off">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Add Category" class="submit_btn" name="add_category">
				</div>
			</div>
		
	</div>
</form>

<div class="table-section">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "SELECT * FROM categories";
                $result_query = mysqli_query($con, $select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $category_name	 = $row['category_name'];
                    $category_id = $row['category_id'];
                    echo "<tr>";
                    echo "<td>{$category_id}</td>";
                    echo "<td>{$category_name}</td>";
                    echo "<td><a href='delete_category.php?delete={$category_id}'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</main>


