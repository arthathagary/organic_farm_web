
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
            <h1 class="display-3 mb-3 ">Checkout</h1>
        </div>
    </div>
    <!-- Page Header End -->

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <?php
            if(!isset($_SESSION['user_name'])){
            echo "<script>alert('Please Login First')</script>";
            echo "<script>window.open('./user_area/user_login.php','_self')</script>";
            }else{
                echo "<script>window.open('./payment.php','_self')</script>";
            }
            ?>
        </div>
    </div>
</div>
 


   
    <!-- Footer Start -->
    <?php
    include ("./include/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>