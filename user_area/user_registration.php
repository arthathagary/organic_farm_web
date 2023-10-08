<?php
include ("../../../htdocs/doa/include/connect.php");
include ("../../../htdocs/doa/functions/common_function.php");

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
			Registration Form
		</div>

		<form method="post" action="">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname">
					</div>
				</div>
				<div class="input_wrap">
					<label for="username">User Name</label>
					<input type="text" id="username" name="username">
				</div>
				
				<div class="input_wrap">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>
				<div class="input_wrap">
					<label for="confirm_password">Confirm Password</label>
					<input type="password" id="comfirm_password" name="confirm_password">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn" name="user_register">
				</div>
				<div class="input_wrap">
					<p class="sign-up-text">Already have an account? <a class="sign-up-text" href="user_login.php">Login Here</a></p>
			</div>
		</form>
	</div>
</div>
    
</body>
</html>

<?php
if(isset($_POST['user_register'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	$confirm_password = $_POST['confirm_password'];
	$user_ip = getIPAddress();

	//select username and prevent duplicate username
	$query_select = "SELECT * FROM user_details WHERE user_name = '$username'";
	$result_select = mysqli_query($con, $query_select);
	$count = mysqli_num_rows($result_select);
	if($count > 0){
		echo "<script>alert('Username already exists!')</script>";
		echo "<script>window.open('user_registration.php', '_self')</script>";
	}else{
	if($password == $confirm_password){
		$query_user = "INSERT INTO user_details (first_name, last_name, user_name, user_password,user_ip_address) VALUES ('$fname', '$lname', '$username', '$hashed_password','$user_ip')";
		$result_user = mysqli_query($con, $query_user);
		if($result_user){
			echo "<script>alert('Registration Successful!')</script>";
			echo "<script>window.open('user_login.php', '_self')</script>";
		}else{
			echo "<script>alert('Registration Failed!')</script>";
			echo "<script>window.open('user_registration.php', '_self')</script>";
		}
	}else{
		echo "<script>alert('Password does not match!')</script>";
		echo "<script>window.open('user_registration.php', '_self')</script>";
	}
}
}
?>