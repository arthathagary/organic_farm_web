<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- Template Stylesheet -->
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body>
   
    <!-- Navbar Start -->
    <?php include ('./include/navBar.php'); 
    ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid p-0 mb-5 hero-section" >
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 hero-content">
                                    <h1 class="display-2 mb-5">Organic Food Is Good For Health</h1>
                                    <a href="product.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 btn-fixed-width">Products</a>
                                    <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3 btn-fixed-width">Services</a> -->
                                </div>
                            </div>
                        </div>
               
    </div>
    <!-- Hero End -->


    




    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5"  style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Our Products</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end  slideInRight" >
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <?php
                        getCategories();
                        ?>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                       <?php
                        getLimitedProducts();
                        getLimitedUniqueCategory();
                       ?>
                        <div class="col-12 text-center  " >
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="product.php">Browse More Products</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Question Start -->
    <form accept="" method="post" class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7  " >
                    <h1 class="display-5 text-white mb-3">Put your questions</h1>
                    <p class="text-white mb-0">We're here to help! Your curiosity matters to us, and we're always eager to assist you in any way we can. Whether you want to know more about our products, our sustainable practices, or anything else related to organic fruits and vegetables, don't hesitate to reach out.</p>
                </div>
                <div class="col-md-5 text-md-end" >
                    <input type="submit" class="btn btn-lg btn-secondary rounded-pill py-3 px-5"  name="quiz_btn" value="Ask">
                    <?php
                    if(isset($_POST['quiz_btn'])){
                        if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'farmer'){
                                echo "<script>window.open('./farmer_area/index.php?ask_question','_self')</script>";
                            }else{
                                echo "<script>alert('Only Farmers Can Ask Question')</script>";
                                echo "<script>window.open('./index.php','_self')</script>";
                                
                            }
                        }else{
                                echo "<script>window.open('./user_area/user_login.php','_self')</script>";
                            }
                    }
                
            ?>
                </div>
            </div>
        </div>
    </form>
    <!-- Question End -->





    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5  "  style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
            </div>
            <div class="row g-4">
               <?php
                getLimitedBlogs();
               ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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