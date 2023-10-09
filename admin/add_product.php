<?php
include "../include/connect.php";
if(isset($_POST['add_product'])){
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
        move_uploaded_file($product_image_tmp, "product_images/$product_image");
        $insert_products = "INSERT INTO `products`(product_name, product_description, category_id, product_price, product_image,created_at,product_status) VALUES('$product_name', '$product_description', '$product_category', '$product_price', '$product_image',NOW(),'$product_status')";
        $product_result = mysqli_query($con, $insert_products);
        if($product_result){
            echo "<script>alert('Product Added Successfully')</script>";
        }else{
            echo "<script>alert('Product Not Added')</script>";
        }
        
    } 
}
?>



<form class="wrapper container" action="" method="post" enctype="multipart/form-data">
	<div class="registration_form">
		<div class="title">
			Add Products
		</div>

		<form method="post" action="">
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="product_name">Product Name</label>
					<input type="text" id="product_name" name="product_name">
				</div>
				<div class="input_wrap">
					<label for="product_description">Product Description</label>
					<input type="text" id="product_description" name="product_description">
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
					<input type="text" id="product_price" name="product_price">
				</div>
                <div class="input_wrap">
					<label for="product_image">Product Image</label>
					<input type="file" id="product_image" name="product_image">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Add Product" class="submit_btn" name="add_product">
				</div>
			</div>
		</form>
	</div>
</form>
    


