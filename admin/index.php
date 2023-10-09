<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/084cdcba7c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="../css/admin.css">
    
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<main>
<div class="container-fluid  fixed-top px-0">
        <nav class="navbar navbar-expand-lg  navbar-light py-lg-0 px-lg-5  " >
            <a href="" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">DO<span class="text-secondary">A</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?add_category" class="nav-item nav-link">Add Categories</a>
                    <a href="index.php?add_product" class="nav-item nav-link">Add Products</a>
                    <a href="index.php?add_blog" class="nav-item nav-link">Add Blogs</a>
                    <a href="index.php?quiz" class="nav-item nav-link">View Questions</a>
                    <a href="contact.php?accounts" class="nav-item nav-link">View Accounts</a>
                </div>
               
            </div>
        </nav>
    </div>

   



    


<div class="main-content">
    <div>
        <?php
            if(isset($_GET['add_category'])){
                include "add_category.php";
            }
        ?>

    <div>
        <?php
            if(isset($_GET['add_product'])){
                include "add_product.php";
            }
        ?>
    </div>

    <div>
        <?php
            if(isset($_GET['add_blog'])){
                include "add_blog.php";
            }
        ?>
    </div>
    </div>
</div>
</main>

   

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>