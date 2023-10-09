

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
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


   
 <!-- Customized Bootstrap Stylesheet -->
 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <?php include ('./include/navBar.php'); ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5  " >
        <div class="container">
            <h1 class="display-3 mb-3 ">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6  " >
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6  " >
                    <h1 class="display-5 mb-4">Best Organic Fruits And Vegetables</h1>
                    <p class="mb-4">Welcome to Department Of Agriculture, your trusted source for fresh, organic fruits and vegetables!</p>

<p>At Department Of Agriculture, we are passionate about bringing you the highest quality, locally sourced, and sustainably grown produce. Our commitment to organic farming practices ensures that every bite you take is not only delicious but also free from harmful pesticides and chemicals.</p>

<p>Our journey began with a simple belief: everyone deserves access to wholesome, nutritious food. That's why we work tirelessly to connect you with the bounty of nature, delivering the goodness of freshly harvested fruits and vegetables right to your doorstep.</p>

<p>From farm to table, we take pride in supporting local farmers and communities, reducing our carbon footprint, and promoting a healthier lifestyle. Join us in our mission to make healthy living more accessible and delicious than ever.</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   


  

    <!-- Footer Start -->
    <?php
    include ("./include/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>