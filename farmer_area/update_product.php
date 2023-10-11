<?php
include "../include/connect.php";
$id = $_GET['update_product'];
if(isset($_POST['update_product'])){
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    $product_status = 'true';

    if(empty($product_name) || empty($product_description) || empty($product_category) || empty($product_price) || empty($product_image)){
        echo "<script>alert('Please Fill All Fields')</script>";
        exit();
    }else{
        move_uploaded_file($product_image_tmp, "../admin/product_images/$product_image");
        $update_products = "update `products` set product_name='$product_name', product_description='$product_description', category_id='$id', product_price='$product_price', product_image='$product_image',created_at=NOW(),product_status='$product_status' where product_id='$id'";
        $product__upadate_result = mysqli_query($con, $update_products);
        if($product__upadate_result){
            echo "<script>alert('Product Upadated Successfully')</script>";
            echo "<script>window.open('index.php?add_product', '_self')</script>";
        }else{
            echo "<script>alert('Product Not Updated')</script>";
        }
        
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/084cdcba7c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="../css/admin.css">
    
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="container-fluid  fixed-top px-0">
        <nav class="navbar navbar-expand-lg  navbar-light py-lg-0 px-lg-5  " >
            <a href="" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">DO<span class="text-secondary">A</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?add_category" class="nav-item nav-link">Categories</a>
                    <a href="index.php?add_product" class="nav-item nav-link">Products</a>
                    <a href="index.php?add_blog" class="nav-item nav-link">Blogs</a>
                    <a href="index.php?quiz" class="nav-item nav-link">Questions</a>
                    <a href="index.php?messages" class="nav-item nav-link">Messages</a>
                </div>
               
            </div>
        </nav>
    </div>


<main class="product-section container">
<aside class="add-product-section">
<form class="wrapper" action="" method="post" enctype="multipart/form-data">
	<div class="registration_form">
		<div class="title">
			Update Products
		</div>

		
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="product_name">Product Name</label>
					<input type="text" id="product_name" name="product_name" required autocomplete="off">
				</div>
				<div class="input_wrap">
					<label for="product_description">Product Description</label>
					<input type="text" id="product_description" name="product_description" required autocomplete="off">
				</div>
                <div class="input_wrap">
					<label for="product_category">Product Category</label>
                    <select name="product_category" id="">
            <?php
                $select_query = "SELECT * FROM categories";
                $result_query = mysqli_query($con, $select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $category_name	 = $row['category_name'];
                    $category_id = $row['category_id'];
                    echo "<option value='{$category_id}'>{$category_name}</option>";
                }
            ?>
        </select>
                </div>
                <div class="input_wrap">
					<label for="product_price">Product Price</label>
					<input type="text" id="product_price" name="product_price" required autocomplete="off">
				</div>
                <div class="input_wrap">
					<label for="product_image">Product Image</label>
					<input type="file" id="product_image" name="product_image" required autocomplete="off">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Update Product" class="submit_btn" name="update_product">
				</div>
			</div>
		
	</div>
</form>
</aside>

<div class="table-section">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
    
                <th>Product Price</th>
                <th>Product Image</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            $select_query = "SELECT * FROM products";
            $result_query = mysqli_query($con, $select_query);
            while($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_description = $row['product_description'];
                $category_id = $row['category_id'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image'];
               
                
                echo "<tr>";
                echo "<td>{$product_name}</td>";
                echo "<td>{$product_description}</td>";
                
                echo "<td>{$product_price}</td>";
                echo "<td><img src='../admin/product_images/{$product_image}' width='100px' height='100px'></td>";
               
               
             
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>
</main>
<script src="../js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>


    
