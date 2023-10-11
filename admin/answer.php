<?php
include "../include/connect.php";
$quiz_id = $_GET['answer'];
if(isset($_POST['add_answer'])){
    $answer = $_POST['answer'];
    $update_query = "UPDATE questions SET answer = '$answer' WHERE question_id = '$quiz_id'";
    $update_result = mysqli_query($con, $update_query);
    if($update_result){
        echo "<script>alert('Answer Added Successfully')</script>";
        echo "<script>window.open('index.php?quiz','_self')</script>";
    }else{
        echo "<script>alert('Answer Added Failed')</script>";
    }
}
?>
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
                <a href="index.php?add_category" class="nav-item nav-link">Categories</a>
                    <a href="index.php?add_product" class="nav-item nav-link">Products</a>
                    <a href="index.php?add_blog" class="nav-item nav-link">Blogs</a>
                    <a href="index.php?quiz" class="nav-item nav-link">Questions</a>
                    <a href="index.php?messages" class="nav-item nav-link">Messages</a>
                </div>
               
            </div>
        </nav>
    </div>


<main class="product-section container">
<aside class="add-product-section">
<form class="wrapper" action="" method="post" enctype="multipart/form-data">
	<div class="registration_form">
		<div class="title">
			Answer Questions
		</div>

		
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="answer">Enter Answer</label>
					<input type="text" id="answer" name="answer" required autocomplete="off">
				</div>

				<div class="input_wrap">
					<input type="submit" value="Submit" class="submit_btn" name="add_answer">
				</div>
			</div>
		
	</div>
</form>
</aside>
</div>
</main>
<script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>


    
