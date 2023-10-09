<?php 
include ("./include/connect.php");
include ("./functions/common_function.php");
@session_start();
?>
<div class="container-fluid fixed-top px-0">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5  " >
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">DO<span class="text-secondary">A</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="product.php" class="nav-item nav-link">Products</a>
                    <a href="blog.php" class="nav-item nav-link">Blogs</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <?php 
                    if(isset($_SESSION['user_name'])){
                        echo "<a href='user_area/user_logout.php' class='nav-item nav-link'>Logout</a>";
                    }else{
                        echo "<a href='user_area/user_login.php' class='nav-item nav-link'>Login</a>";
                    }
                     ?>
                </div>
                <div class="d-none d-lg-flex ms-2">
                
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="../../doa/user_area/user_login.php">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="cart.php">
                        <small class="fa fa-shopping-bag text-body"><sup><?php getCardItemNum(); ?></sup></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <?php
    card();
    ?>