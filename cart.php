<?php
include ('./include/connect.php')
?>

<!DOCTYPE html>
<html lang="en">


    <meta charset="utf-8">
    <title>DOA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/084cdcba7c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


   
 <!-- Bootstrap Stylesheet -->
 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php include ('./include/navBar.php'); ?>
    <!-- Navbar End -->

     <!-- Page Header Start -->
     <div class="container-fluid page-header">
        <div class="container">
            <h1 class="display-3 mb-3 ">Card</h1>
        </div>
    </div>
    <!-- Page Header End -->


  <!-- Table Start -->
  <form action="" method="post">
  <table>
  <thead>
    <tr>

    <?php
 global $con;
 $get_ip_add = getIPAddress();
 $total_price = 0;
 $select_card = "SELECT * FROM `card_details` WHERE ip_address = '$get_ip_add'";
 $result_card = mysqli_query($con, $select_card);
  $result_card_count = mysqli_num_rows($result_card);
if($result_card_count>0){
  echo "<th>Product Title</th>
  <th>Product Image</th>
  <th>Quantity</th>
  <th>Total Price</th>
  <th>Remove</th>
  <th>Operations</th>
</tr>
</thead>
<tbody>";
while($row=mysqli_fetch_array($result_card)){
  $product_id = $row['product_id'];
  $select_product = "SELECT * FROM `products` WHERE product_id = $product_id";
  $result_product = mysqli_query($con, $select_product);
  while($row_product=mysqli_fetch_array($result_product)){
      $product_price = array($row_product['product_price']);
      $price_table = $row_product['product_price'];
      $product_name = $row_product['product_name'];
      $product_image = $row_product['product_image'];
      $product_values = array_sum($product_price);
      $total_price += $product_values;
?>
        <tr>
        <td ><?php echo $product_name ?></td>
        <td ><img src='./admin/product_images/<?php echo $product_image ?>' class='cart-img' /></td>
        <td ><input type='text' name='qty' id=''></td>
        <td ><?php echo $price_table?>/-</td>
        <td ><input type='checkbox' name="removeitem[]" value="<?php echo $product_id ?>" ></td>
        <td >
          <input type='submit' class="btn btn-outline-primary mb-2" value='Update Card' name='update_cart'>
          <?php 
         if(isset($_POST['update_cart'])){
          $quantities = $_POST['qty'];
          $update_qty = "UPDATE `card_details` SET `quantity` = $quantities WHERE `product_id` = $product_id AND `ip_address` = '$get_ip_add'";
          $result_update_qty = mysqli_query($con, $update_qty);
          $total_price = $total_price * $quantities;
         }
          ?>
          <input type='submit' class="btn btn-outline-secondary" value='Remove Item' name='remove_button'>
        </td>
      </tr>

      <?php 
          }
        }
      }else{
        echo "<h2 class='text-center'>Your Card is Empty</h2>";
      }
      ?>

    
  </tbody>
</table>
    <!-- Table End -->
    <?php 
    global $con;
    $get_ip_add = getIPAddress();
    $select_card = "SELECT * FROM `card_details` WHERE ip_address = '$get_ip_add'";
    $result_card = mysqli_query($con, $select_card);
    $result_card_count = mysqli_num_rows($result_card);
    if($result_card_count>0){
      echo "<div class=' text-center'><h2>Subtotal:$total_price/-</h2>
      <input class='btn btn-secondary' type='submit' value='Continue Shopping' name='continue_shopping'>
      <input class='btn btn-secondary' type='submit' value='Checkout' name='checkout'>";
    }else{
      echo "<div class=' text-center'><input type='submit' value='Continue Shopping' class='btn btn-primary' name='continue_shopping'></div>";
    }
    if(isset($_POST['continue_shopping'])){
      echo "<script>window.open('product.php','_self')</script>";
    }
    ?>
    
        </form>
   
 <!-- Function to remove card items --> 
  <?php

  function removeCardItem(){
    global $con;
    $get_ip_add = getIPAddress();
    if(isset($_POST['remove_button'])){
      foreach($_POST['removeitem'] as $remove_id){
        $delete_product = "DELETE FROM `card_details` WHERE `product_id` = $remove_id AND `ip_address` = '$get_ip_add'";
        $result_delete_product = mysqli_query($con, $delete_product);
        if($result_delete_product){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }
  }
  echo @$remove_item = removeCardItem();
  ?>

<?php
if(isset($_POST['checkout'])){
 if(!isset($_SESSION['user_name'])){
  echo "<script>alert('Please Login First')</script>";
  echo "<script>window.open('./user_area/user_login.php','_self')</script>";
}else{
  //write the card details table to product table
  $get_ip_add = getIPAddress();
  $select_card = "SELECT * FROM `card_details` WHERE ip_address = '$get_ip_add'";
  $result_card = mysqli_query($con, $select_card);
  $result_card_count = mysqli_num_rows($result_card);
  $select_user_details = "SELECT * FROM `user_details` WHERE `user_name` = '".$_SESSION['user_name']."'";
  $result_user_details = mysqli_query($con, $select_user_details);
  $result_user_details_count = mysqli_num_rows($result_user_details);
  if($result_user_details_count>0){
    while($row_user_details=mysqli_fetch_array($result_user_details)){
      $user_id = $row_user_details['user_id'];
      $user_name = $row_user_details['user_name'];
    }
  }
  if($result_card_count>0){
    while($row=mysqli_fetch_array($result_card)){
      $product_id = $row['product_id'];
      $quantity = $row['quantity'];
      if($quantity==0){
        $quantity = 1;
      }else{
        $quantity = $quantity;
      }
      $invoice_number = mt_rand();
      $status = 'ordered';
      $insert_order = "INSERT INTO `user_orders`(`user_id`, `amount_due`,`invoice_number`,`total_products`,`order_date`,`order_status`) VALUES ($user_id ,$total_price,$invoice_number,$quantity,NOW(),'$status')";
      $result_insert_order = mysqli_query($con, $insert_order);
      if($result_insert_order){
        $delete_card = "DELETE FROM `card_details` WHERE `product_id` = $product_id AND `ip_address` = '$get_ip_add'";
        $result_delete_card = mysqli_query($con, $delete_card);
        if($result_delete_card){
          echo "<script>alert('Order Placed Successfully')</script>";
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }
  }
}
}
?>

    <!-- Footer Start -->
    <?php
    include ("./include/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>