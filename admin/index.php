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
</head>
<body>
    <!-- <main class="admin-dash">
    <div class="sideNav">
    <a href="index.php?add_category">Add Category<a/>
    <a href="index.php?add_product">Add Product<a/>
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
    </div>

    </div>
    
    </main> -->




    
    <a href="#sidenav" class="btn open">&#8801;</a>
<div class="sidenav" id="sidenav">
    <ul>
        <li class="center user">
            <!-- <img src="https://placeimg.com/300/300/people" alt="User" /> -->
            <p>Admin</p>
        </li>
        <li class="divider"></li>
        <li class="title">Functions</li>
        <li class="item"><a href="index.php?add_category">Add Category</a></li>
        <li class="item"><a href="index.php?add_product">Add Product</a></li>
        <li class="item"><a href="#">Portfolio</a></li>
        <li class="item"><a href="#">Testimonials</a></li>
        <li class="item"><a href="#">Contact</a></li>
        <li class="divider"></li>
        <li class="title">Projects</li>
        <li class="item"><a href="#">Project 1</a></li>
        <li class="item"><a href="#">Project 2</a></li>
        <li class="item"><a href="#">Project 3</a></li>
    </ul>
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
    </div>
</div>

   

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>