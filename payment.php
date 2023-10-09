<?php
include ('./include/connect.php');
include ('./functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="row container">
        <div class="col-md-12">
            <div class="row">
            <h1 class="text-center">payment</h1>
    <?php
    global $con;
    $get_ip_add = getIPAddress();
    $total_price = 0;
    $select_card = "SELECT * FROM `card_details` WHERE ip_address = '$get_ip_add'";
    $result_card = mysqli_query($con, $select_card);
    while($row=mysqli_fetch_array($result_card)){
        $product_id = $row['product_id'];
        $select_product = "SELECT * FROM `products` WHERE product_id = $product_id";
        $result_product = mysqli_query($con, $select_product);
        $invoice_number = mt_rand();
        $status = 'pending';
        $count_products = mysqli_num_rows($result_product);
        while($row_product=mysqli_fetch_array($result_product)){
            $product_name = $row_product['product_name'];
            $product_image = $row_product['product_image'];
            $product_quantity = $row['quantity'];
            $product_price = $row_product['product_price'];
            $total_price += $product_price;
            if($product_quantity==0){
                $product_quantity = 1;
            }else{
                $product_quantity = $product_quantity;
            }

        }
    }
    echo "<p class='text-center'>$total_price</p>
    <p class='text-center'>$product_quantity , $values</p>
    ";
    ?>
    <form action="" method="post">
    <input type="submit" value="Confirm Payment" name="confirm_payment" class="btn btn-outline btn-primary">
    </form>


            </div>
        </div>
    </div>
    
    

  


<script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>