

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
    <div class="container-fluid page-header  " >
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Blogs</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5  "  style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Blog</h1>
            </div>
            <div class="row g-4">
            <?php
                getBlogs();
            ?>

              
                
              
                <div class="col-12 text-center  " >
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Load More</a>
                </div>
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


    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>