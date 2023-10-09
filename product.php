

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
            <h1 class="display-3 mb-3 ">Products</h1>
        </div>
    </div>
    <!-- Page Header End -->


 


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mb-5  ">
                    <div class="title_search">
                      
                       
   <form action="search_product.php" method="get" class="search">
      <input type="text" class="searchTerm" placeholder="Search" name="search_data">
      <input type="submit" class="searchButton" placeholder="Search" value="Search" name="search_data_product">
  
</form>
</div>
                       
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end  " >
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <?php
                        getCategories();
                        ?>
                    </ul>
                </div>
            </div>
           
                <div>
                    <div class="row g-4">
                        <?php
                        getProducts();
                        getUniqueCategory();
                        $ip = getIPAddress();  
                        ?>
                       
                       
                        <div class="col-12 text-center " >
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                        </div>
                    </div>
                </div>
               
                
         
        </div>
    </div>
    <!-- Product End -->


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