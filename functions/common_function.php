<?php
include ('../include/connect.php');


function getProducts() {
    global $con;
   if(!isset($_GET['category'])){
    $select_query = "SELECT * FROM products";
                        $result_query = mysqli_query($con, $select_query);
                        while ($row = mysqli_fetch_assoc($result_query)){
                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_description = $row['product_description'];
                            $category_id = $row['category_id'];
                            $product_price = $row['product_price'];
                            $product_image = $row['product_image'];
                            $product_status = $row['product_status'];

                           echo "<div class='col-xl-3 col-lg-4 col-md-6'>
                           <div class='product-item'>
                               <div class='position-relative bg-light overflow-hidden'>
                                   <img class='img-fluid w-100' src='./admin/product_images/$product_image' alt=''>
                                   <div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>New</div>
                               </div>
                               <div class='text-center p-4'>
                                   <a class='d-block h5 mb-2' href=''>$product_name</a>
                                   <span class='text-primary me-1'>$product_price</span>   
                               </div>
                               <div class='d-flex border-top'>
                                   <small class='w-50 text-center border-end py-2'>
                                       <a class='text-body' href=''><i class='fa fa-eye text-primary me-2'></i>View detail</a>
                                   </small>
                                   <small class='w-50 text-center py-2'>
                                       <a class='text-body' href=''><i class='fa fa-shopping-bag text-primary me-2'></i>Add to cart</a>
                                   </small>
                               </div>
                           </div>
                       </div>";
                       
                    }
                }
}

function getUniqueCategory() {
    global $con;
   if(isset($_GET['category'])){
    $category_id = $_GET['category'];
    $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
                        $result_query = mysqli_query($con, $select_query);
                        $num_of_rows = mysqli_num_rows($result_query);
                        if($num_of_rows == 0){
                            echo "<div class='col-lg-12'>
                            <div class='alert alert-danger text-center' role='alert'>
                                No product found in this category
                            </div>";
                        }else{
                        while ($row = mysqli_fetch_assoc($result_query)){
                            $product_id = $row['product_id'];
                            $product_name = $row['product_name'];
                            $product_description = $row['product_description'];
                            $category_id = $row['category_id'];
                            $product_price = $row['product_price'];
                            $product_image = $row['product_image'];
                            $product_status = $row['product_status'];

                           echo "<div class='col-xl-3 col-lg-4 col-md-6'>
                           <div class='product-item'>
                               <div class='position-relative bg-light overflow-hidden'>
                                   <img class='img-fluid w-100' src='./admin/product_images/$product_image' alt=''>
                                   <div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>New</div>
                               </div>
                               <div class='text-center p-4'>
                                   <a class='d-block h5 mb-2' href=''>$product_name</a>
                                   <span class='text-primary me-1'>$product_price</span>   
                               </div>
                               <div class='d-flex border-top'>
                                   <small class='w-50 text-center border-end py-2'>
                                       <a class='text-body' href=''><i class='fa fa-eye text-primary me-2'></i>View detail</a>
                                   </small>
                                   <small class='w-50 text-center py-2'>
                                       <a class='text-body' href=''><i class='fa fa-shopping-bag text-primary me-2'></i>Add to cart</a>
                                   </small>
                               </div>
                           </div>
                       </div>";
                       
                    }
                }
                }
}

function getCategories() {
    global $con;
    $select_category = "SELECT * FROM categories";
                        $result_category = mysqli_query($con, $select_category);
                        while ($row_data = mysqli_fetch_array($result_category)) {
                            $category_name = $row_data['category_name'];
                            $category_id = $row_data['category_id'];
                            echo "<li class='nav-item me-2'>
                                <a class='btn btn-outline-primary border-2'  href='product.php?category=$category_id'>$category_name</a>
                            </li>";
                        }

}

function getBlogs(){
    global $con;
    $select_query = "SELECT * FROM blogs";
    $result_query = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)){
        $blog_id = $row['blog_id'];
        $blog_title = $row['blog_title'];
        $blog_content = $row['blog_content'];
        $blog_image = $row['blog_image'];
        $blog_date = $row['blog_date'];
        $who_post = $row['who_post'];
        $blog_status = $row['blog_status'];
       echo "<div class='col-lg-4 col-md-6 wow fadeInUp'>
       <img class='img-fluid' src='./admin/product_images/$blog_image' alt=''>
       <div class='bg-light p-4'>
           <a class='d-block h5 lh-base mb-4' href=''>$blog_title</a>
           <div class='text-muted border-top pt-4'>
               <small class='me-3'><i class='fa fa-user text-primary me-2'></i>$who_post</small>
               <small class='me-3'><i class='fa fa-calendar text-primary me-2'></i>$blog_date</small>
           </div>
       </div>
   </div>";
    }
}
