<?php
include ("../../../htdocs/doa/include/connect.php");
include ("../../../htdocs/doa/functions/common_function.php");
@session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Login Form
		</div>

		<form method="post" action="">
			<div class="form_wrap">
				<div class="input_wrap">
					<label for="user_name">User Name</label>
					<input type="text" id="user_name" name="user_name">
				</div>
				<div class="input_wrap">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Login" class="submit_btn" name="user_login">
				</div>
				<div class="input_wrap">
					<p class="sign-up-text">Don't have an account? <a class="sign-up-text" href="user_registration.php">Register Here</a></p>
				</div>
			</div>
		</form>
	</div>
</div>
    
</body>
</html>

<?php
if(isset($_POST['user_login'])){
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$select_query = "SELECT * FROM `user_details` WHERE `user_name` = '$user_name'";
	$result_select = mysqli_query($con,$select_query);
	$row_count = mysqli_num_rows($result_select);
	$row_data = mysqli_fetch_assoc($result_select);
	if($row_count > 0){
		$_SESSION['user_name'] = $user_name;
		if(password_verify($password,$row_data['user_password'])){
			if($row_count ==1){
				if($row_data['user_type'] == 'admin'){
					$_SESSION['user_type'] = $row_data['user_type'];
					echo "<script>alert('Login Successfull')</script>";
					echo "<script>window.open('../admin/index.php','_self')</script>";
				}else if($row_data['user_type'] == 'normal'){
					$_SESSION['user_type'] = $row_data['user_type'];
					echo "<script>alert('Login Successfull')</script>";
					echo "<script>window.open('../index.php','_self')</script>";
				}else if($row_data['user_type'] == 'farmer'){
					$_SESSION['user_type'] = $row_data['user_type'];
					echo "<script>alert('Login Successfull')</script>";
					echo "<script>window.open('../farmer_area/index.php','_self')</script>";
				}else if($row_data['user_type'] == 'officer'){
					$_SESSION['user_type'] = $row_data['user_type'];
					echo "<script>alert('Login Successfull')</script>";
					echo "<script>window.open('../officer_area/index.php','_self')</script>";
				}else{
				echo "<script>alert('Login Successfull')</script>";
				echo "<script>window.open('../index.php','_self')</script>";
			}
		}else{
			echo "<script>alert('Invalid Credentials')</script>";
		}
	}else{
		echo "<script>alert('Invalid Credentials')</script>";
	}
}
}	

?>