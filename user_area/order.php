<?php
include ("../../../htdocs/doa/include/connect.php");
include ("../../../htdocs/doa/functions/common_function.php");

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
}

//get total items and total price of all items
$get_ip = getIPAddress();
$toal_price = 0;
$cart_query = "SELECT * FROM `card_details` WHERE `ip_address` = '$get_ip'";
$cart_result_price = mysqli_query($con, $cart_query);
$count_price = mysqli_num_rows($cart_result_price);
while($row_price = mysqli_fetch_array($cart_result_price)){
    $product_id = $row_price['product_id'];
    $product_price_query = "SELECT * FROM `product_details` WHERE `product_id` = '$product_id'";
    $product_price_result = mysqli_query($con, $product_price_query);
    while($row_price_product = mysqli_fetch_array($product_price_result)){
       $product_id = $row_price_product['product_id'];
       $select_product = "SELECT * FROM `product_details` WHERE `product_id` = '$product_id'";
       $run_price = mysqli_query($con, $select_product);
       while($row_product_price = mysqli_fetch_array($run_price)){
           $product_price = array($row_product_price['product_price']);
           $values = array_sum($product_price);
           $total_price += $values;
       }
    }
}

?>