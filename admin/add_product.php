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


<main class="product-section container">
<aside class="add-product-section">
<form class="wrapper" action="" method="post" enctype="multipart/form-data">
	<div class="registration_form">
		<div class="title">
			Add Products
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
					<input type="submit" value="Add Product" class="submit_btn" name="add_product">
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
                <th>Edit</th>
                <th>Delete</th>
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
                echo "<td><img src='product_images/{$product_image}' width='100px' height='100px'></td>";
               
               
                echo "<td><a href='edit_product.php?edit_product={$product_id}'>Edit</a></td>";
                echo "<td><a href='delete_product.php?delete_product={$product_id}'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>
</main>
    


